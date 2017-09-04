<?php

class NhanvienController extends Controller
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
				'actions'=>array('create','update','Ajax','view','admin','nghiviec','thaisan' ),
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
	public function actionCreate()
	{
		$model=new Nhanvien;
		$model->nhanvien_trangthai_nghiviec = Nhanvien::LAMVIEC;
		$Chucdanh = array();
		$model->admin_id = Yii::app()->user->getState('admin_id');
		$this->performAjaxValidation($model);

		if(isset($_POST['Nhanvien']))
		{
			$model->attributes=$_POST['Nhanvien'];
			if($model->phongban_id > 0){
				$Phongban = Phongban::model()->findbypk($model->phongban_id);
				$model->bophan_id = $Phongban['bophan_id'];
			}
			
			
			$stringHelper = new StringHelper();
			$model->nhanvien_hoten_search = $stringHelper->StrRewrite($model->nhanvien_ho .' ' . $model->nhanvien_ten,' ');
			$model->nhanvien_trangthai_nghiviec = 0;
			
			
			$nhanvien_hinhanh = CUploadedFile::getInstance($model, 'nhanvien_hinhanh');
			
			if ($nhanvien_hinhanh) {
				
				$photo_name = str_replace(" ", "-", $model->nhanvien_hoten_search) . rand(0, 999). '.' . $nhanvien_hinhanh->extensionName;
				$model->nhanvien_hinhanh = '/media/' . date('Y') . '/' .   $photo_name;
				$nhanvien_hinhanh->saveAs('./media/' .  date('Y') . '/' . $photo_name);

				$smallimage = Yii::app()->image->load('.'.$model->nhanvien_hinhanh);
				$smallimage->resize(450,0)->crop(450,450)->quality(100);
				$smallimage->save('.'.$model->nhanvien_hinhanh);
			}
			
			
			if($model->save()){
				Yii::app()->user->setFlash('success', "Đã thêm mới thông tin nhân viên");
				// Create meta infor
				$NhanvienLylich=new NhanvienLylich;
				$NhanvienLylich->nhanvien_id = $model->nhanvien_id;
				$NhanvienLylich->save(false);
			
				
				$this->redirect(array('admin'));
				$this->redirect(array('view','id'=>$model->nhanvien_id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'Chucdanh'=>$Chucdanh
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
		$nhanvien_hinhanh_hientai = $model->nhanvien_hinhanh;
		$this->performAjaxValidation($model);
		$Chucdanh = Chucdanh::model()->findall(array('select'=>'chucdanh_id, chucdanh_ten','condition'=>'bophan_id='.$model->bophan_id));
		if(isset($_POST['Nhanvien']))
		{
			$model->attributes=$_POST['Nhanvien'];
			
			if($model->phongban_id > 0){
				$Phongban = Phongban::model()->findbypk($model->phongban_id);
				$model->bophan_id = $Phongban['bophan_id'];
			}
			
			$stringHelper = new StringHelper();
			$model->nhanvien_hoten_search = $stringHelper->StrRewrite($model->nhanvien_ho .' ' . $model->nhanvien_ten,' ');
			
			$nhanvien_hinhanh = CUploadedFile::getInstance($model, 'nhanvien_hinhanh');
			
			if ($nhanvien_hinhanh) {
				$photo_name = str_replace(" ", "-", $model->nhanvien_hoten_search) . rand(0, 999). '.' . $nhanvien_hinhanh->extensionName;
				$model->nhanvien_hinhanh = '/media/' . date('Y') . '/' .   $photo_name;
				$nhanvien_hinhanh->saveAs('./media/' .  date('Y') . '/' . $photo_name);

				$smallimage = Yii::app()->image->load('.'.$model->nhanvien_hinhanh);
				$smallimage->resize(450,0)->crop(450,450)->quality(100);
				$smallimage->save('.'.$model->nhanvien_hinhanh);
			}else{
				$model->nhanvien_hinhanh = $nhanvien_hinhanh_hientai;
			}
			
			
			$model->admin_id = Yii::app()->user->getState('admin_id');
			if($model->save()){
				Yii::app()->user->setFlash('success', "Đã cập nhật thông tin nhân viên");
				$this->redirect(array('admin'));
			}else{
				Yii::app()->user->setFlash('error', "Có lỗi xảy ra");
			}
		}

		$this->render('update',array(
			'model'=>$model,
			'Chucdanh'=>$Chucdanh
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
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Nhanvien('search');
		$model->unsetAttributes();  // clear any default values
		$model->nhanvien_trangthai_nghiviec = Nhanvien::LAMVIEC;
		if(isset($_GET['Nhanvien']))
			$model->attributes=$_GET['Nhanvien'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	/**
	 * Manages all models.
	 */
	public function actionThaisan()
	{
		$model=new Nhanvien('search');
		$model->unsetAttributes();  // clear any default values
		$model->nhanvien_trangthai_nghiviec = Nhanvien::THAISAN;
		if(isset($_GET['Nhanvien']))
			$model->attributes=$_GET['Nhanvien'];

		$this->render('thaisan',array(
			'model'=>$model,
		));
	}
	
	/**
	 * Manages all models.
	 */
	public function actionNghiviec()
	{
		$model=new Nhanvien('search');
		$model->unsetAttributes();  // clear any default values
		$model->nhanvien_trangthai_nghiviec = Nhanvien::NGHIVIEC;
		if(isset($_GET['Nhanvien']))
			$model->attributes=$_GET['Nhanvien'];

		$this->render('nghiviec',array(
			'model'=>$model,
		));
	}
	
	protected function customColumnCGridView($data, $row ,$dataColumn)
	{
		
		
		if ($dataColumn->name === 'nhanvien_ngaysinh') {
			if($data->nhanvien_ngaysinh != NULL){
				//echo date('d/m/Y',strtotime($data->nhanvien_ngaysinh));
				echo $data->nhanvien_ngaysinh;
			}else{
				echo 'Not set';	
			}
		}
		
		if ($dataColumn->name === 'nhanvien_ngayvao') {
			if($data->nhanvien_ngayvao != NULL){
				//echo date('d/m/Y',strtotime($data->nhanvien_ngayvao));
				echo $data->nhanvien_ngayvao;
			}else{
				echo 'Not set';	
			}

		}
		
		if ($dataColumn->name === 'nhanvien_ngayky_hdld') {
			if($data->nhanvien_ngayky_hdld != NULL){
				//echo date('d/m/Y',strtotime($data->nhanvien_ngayky_hdld));
				echo $data->nhanvien_ngayky_hdld;
			}else{
				echo 'Not set';	
			}
			
		}
		
		
		if ($dataColumn->name === 'nhanvien_trangthai') {
			echo $data->getTrangthai()[$data->nhanvien_trangthai];
			
		}
		
		if ($dataColumn->name === 'functions') {
			echo '<div class="btn-group">
                                        <a href="#" data-toggle="dropdown" class="btn btn-xs btn-lime dropdown-toggle"> <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li>'.CHtml::link('Lý lịch nhân viên', array('NhanvienLylich/update','id'=>$data->nhanvien_id),array('title'=>'Lý lịch nhân viên')).'</li>
                                            <li>'.CHtml::link('Thêm ghi chú', array('NhanvienGhichu/admin','nhanvien_id'=>$data->nhanvien_id),array('title'=>'Thêm ghi chú')).'</li>
											<li>'.CHtml::link('Thông tin chi tiết', array('Nhanvien/chitiet','nhanvien_id'=>$data->nhanvien_id),array('title'=>'Xem thông tin chi tiết')).'</li>
                                            <li>'.CHtml::link('Cập nhật thông tin', array('Nhanvien/update','id'=>$data->nhanvien_id),array('title'=>'Cập nhật thông tin')).'</li>
                                            <li class="divider"></li>
											<li>'.CHtml::link('Quản lý HĐLĐ', array('NhanvienHopdong/admin','nhanvien_id'=>$data->nhanvien_id),array('title'=>'Quản lý hợp đồng lao động')).'</li>
                                            <li>'.CHtml::link('Quản lý nghỉ việc', array('NhanvienNghi/admin','id'=>$data->nhanvien_id),array('title'=>'Quản lý nghỉ việc')).'</li>
											</ul>
                                    </div>';
			
		}
		
		
		
		
		
		

	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Nhanvien the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Nhanvien::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Nhanvien $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='nhanvien-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
