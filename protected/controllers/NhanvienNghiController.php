<?php

class NhanvienNghiController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/user';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view',),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','Ajax','view','admin' ),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete'),
				'expression'=>'(Yii::app()->user->getState("admin_group")=="Admin")',
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{
		$nhanvien_id = intval($id);
		$Nhanvien = Nhanvien::model()->findbypk($nhanvien_id);
		$model=new NhanvienNghi;
		$model->nhanvien_id = $nhanvien_id;
		
		$model->admin_id = Yii::app()->user->getState('admin_id');
		$this->performAjaxValidation($model);

		if(isset($_POST['NhanvienNghi']))
		{
			$model->attributes=$_POST['NhanvienNghi'];
			if($model->nghiviec_loai ==  NhanvienNghi::NGHIVIEC){
				$Nhanvien->nhanvien_trangthai_nghiviec = Nhanvien::NGHIVIEC;
				$Nhanvien->save(false);
			}else{
				$Nhanvien->nhanvien_trangthai= Nhanvien::NGHITAM;
				$Nhanvien->save(false);
			}
			
			if($model->save()){
				Yii::app()->user->setFlash('success', "Đã cập nhật thông tin nghỉ việc thành công");
				$this->redirect(array('admin','id'=>$model->nhanvien_id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'Nhanvien'=>$Nhanvien,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$this->performAjaxValidation($model);

		if(isset($_POST['NhanvienNghi']))
		{
			$model->attributes=$_POST['NhanvienNghi'];
			$model->admin_id = Yii::app()->user->getState('admin_id');
			if($model->save())
				$this->redirect(array('view','id'=>$model->nhanvien_nghi_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model = $this->loadModel($id);
		$Nhanvien = Nhanvien::model()->findbypk($model->nhanvien_id);
		if($model->nghiviec_loai == $model::NGHIVIEC){
			$Nhanvien->nhanvien_trangthai_nghiviec = Nhanvien::LAMVIEC;
			$Nhanvien->save(false);
		}else{
			$Nhanvien->nhanvien_trangthai= Nhanvien::CHINHTHUC;
			$Nhanvien->save(false);
		}
		
		$model->delete();
		
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	protected function customColumnCGridView($data, $row ,$dataColumn)
	{
	
		if ($dataColumn->name === 'nghiviec_loai') {
			echo $data->getTrangthai()[$data->nghiviec_loai];
			
		}
		
	

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($id)
	{
		$nhanvien_id= intval($id);
		$Nhanvien = Nhanvien::model()->findbypk($nhanvien_id);
		$model=new NhanvienNghi('search');
		$model->unsetAttributes();  // clear any default values
		$model->nhanvien_id = $nhanvien_id;
		$model->dbCriteria->order='nhanvien_nghi_id DESC';
		if(isset($_GET['NhanvienNghi']))
			$model->attributes=$_GET['NhanvienNghi'];

		$this->render('admin',array(
			'model'=>$model,
			'Nhanvien'=>$Nhanvien,
			'nhanvien_id'=>$nhanvien_id
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return NhanvienNghi the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=NhanvienNghi::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param NhanvienNghi $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='nhanvien-nghi-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
