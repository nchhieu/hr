<?php

class AdminController extends Controller
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
				'actions'=>array('index','view','update','Ajax','Profile','Changepwd'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete','create','admin'),
				'expression'=>'(Yii::app()->user->getState("admin_group")=="Admin")',
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	protected function getAvatar($data, $row){
		$str = '<a href="' . $data->admin_avatar . '" target="_blank"><img src="'. $data->admin_avatar .'" height="40" width="40"></a>';
		return $str;
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
	public function actionCreate()
	{
		$model=new Admin;
		$this->performAjaxValidation($model);

		if(isset($_POST['Admin']))
		{
			$model->attributes=$_POST['Admin'];
			$model->admin_created_date = date('Y-m-d H:i:s');
			$password = $model->admin_password;
			$model->admin_password = md5($password.Yii::app()->params['securCode']);
			$admin_avatar = CUploadedFile::getInstance($model, 'admin_avatar');
			$rand = rand(0, 999);
			if ($admin_avatar) {$model->admin_avatar = '/images/nhanvien/' . $model->admin_email . '_' . $rand . '.' . $admin_avatar->extensionName;}
			if($model->validate()){
				if($model->save()){
					if ($admin_avatar) {
						$admin_avatar->saveAs('./images/nhanvien/'.$model->admin_email . '_' . $rand . '.' . $admin_avatar->extensionName);
						if(is_file('./images/nhanvien/'.$model->admin_email . '_' . $rand . '.' . $admin_avatar->extensionName)){
							@$smallimage = Yii::app()->image->load('./images/nhanvien/'.$model->admin_email . '_' . $rand . '.' . $admin_avatar->extensionName);
							@$smallimage->resize(80, 0)->crop(80,80)->quality(80);
							@$smallimage->save('./images/nhanvien/'.$model->admin_email . '_' . $rand . '.' . $admin_avatar->extensionName);
						}
					}
					$this->redirect(array('view','id'=>$model->admin_id));
				}
			}else{
				$model->admin_password =$password;
				}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionProfile($id)
	{
		$model=$this->loadModel($id);
		$password = $model->admin_password;
		$this->performAjaxValidation($model);

		if(isset($_POST['Admin']))
		{
			$model->attributes=$_POST['Admin'];
			$model->admin_password = $password;
			$admin_avatar = CUploadedFile::getInstance($model, 'admin_avatar');
			$rand = rand(0, 999);
			if ($admin_avatar) {$model->admin_avatar = '/images/nhanvien/' .   $model->admin_email . '_' . $rand . '.' . $admin_avatar->extensionName;}
			if($model->validate()){
				if($model->save()){
					if ($admin_avatar) {
						$admin_avatar->saveAs('./images/nhanvien/' . '/' . $model->admin_email . '_' . $rand . '.' . $admin_avatar->extensionName);
						if(is_file('./images/nhanvien/'.$model->admin_email . '_' . $rand . '.' . $admin_avatar->extensionName)){
							@$smallimage = Yii::app()->image->load('./images/nhanvien/'.$model->admin_email . '_' . $rand . '.' . $admin_avatar->extensionName);
							@$smallimage->resize(80, 0)->crop(80,80)->quality(80);
							@$smallimage->save('./images/nhanvien/'.$model->admin_email . '_' . $rand . '.' . $admin_avatar->extensionName);
						}
					}
					$this->redirect(array('view','id'=>$model->admin_id));
				}
			}
		}

		$this->render('profile',array(
			'model'=>$model,
		));
	}
	
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$password = $model->admin_password;
		$admin_avatar_url = $model->admin_avatar;
		$admin_avatar = $model->admin_avatar;
		$this->performAjaxValidation($model);
		$model->admin_password = '';
		

		if(isset($_POST['Admin']))
		{
			$model->attributes=$_POST['Admin'];
			if($model->admin_password != ''){
				$model->admin_password = md5($model->admin_password.Yii::app()->params['securCode']);
			}else{
				$model->admin_password = $password;
			}
			$admin_avatar = CUploadedFile::getInstance($model, 'admin_avatar');
			$rand = rand(0, 999);
			if ($admin_avatar) {$model->admin_avatar = '/images/nhanvien/' .   $model->admin_email . '_' . $rand . '.' . $admin_avatar->extensionName;}
			else{$model->admin_avatar = $admin_avatar_url;}
			if($model->validate()){
				if($model->save()){
					if ($admin_avatar) {
						$admin_avatar->saveAs('./images/nhanvien/' . $model->admin_email . '_' . $rand . '.' . $admin_avatar->extensionName);
						if(is_file('./images/nhanvien/'.$model->admin_email . '_' . $rand . '.' . $admin_avatar->extensionName)){
							@$smallimage = Yii::app()->image->load('./images/nhanvien/'.$model->admin_email . '_' . $rand . '.' . $admin_avatar->extensionName);
							@$smallimage->resize(80, 0)->crop(80,80)->quality(80);
							@$smallimage->save('./images/nhanvien/'.$model->admin_email . '_' . $rand . '.' . $admin_avatar->extensionName);
						}
					}
					$this->redirect(array('view','id'=>$model->admin_id));
				}
			}else{
				$model->admin_password = '';
				}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionChangepwd($id)
	{
		$model=$this->loadModel($id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$password = $model->admin_password;
		$model->admin_password = '';
		if(isset($_POST['Admin']))
		{
			$model->attributes=$_POST['Admin'];
			if($model->admin_password != ''){
				$model->admin_password = md5($model->admin_password.Yii::app()->params['securCode']);
			}
			if($model->validate()){
				if($model->save()){
					$this->redirect(array('view','id'=>$model->admin_id));
				}
			}
		}

		$this->render('changepwd',array(
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Admin');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Admin('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Admin']))
			$model->attributes=$_GET['Admin'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Admin the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Admin::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Admin $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='admin-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
