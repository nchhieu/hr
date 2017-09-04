<?php

class NhanvienLuongController extends Controller
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
				'actions'=>array('create','update','Ajax','view','admin','UpdateField' ),
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
		$model=new NhanvienLuong;
		$model->admin_id = Yii::app()->user->getState('admin_id');
		$this->performAjaxValidation($model);

		if(isset($_POST['NhanvienLuong']))
		{
			$model->attributes=$_POST['NhanvienLuong'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->nhanvien_luong_id));
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
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$this->performAjaxValidation($model);

		if(isset($_POST['NhanvienLuong']))
		{
			$model->attributes=$_POST['NhanvienLuong'];
			$model->admin_id = Yii::app()->user->getState('admin_id');
			if($model->save())
				$this->redirect(array('view','id'=>$model->nhanvien_luong_id));
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
		$dataProvider=new CActiveDataProvider('NhanvienLuong');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Nhanvien('searchluong');
		$model->unsetAttributes();  // clear any default values
		$model->nhanvien_trangthai_nghiviec = Nhanvien::LAMVIEC;
		if(isset($_GET['Nhanvien'])){
			$model->attributes=$_GET['Nhanvien'];	
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	/**
	 * Manages all models.
	 */
	public function actionUpdateField()
	{
		$luong_id = Yii::app()->request->getPost('luong_id');
		$field = Yii::app()->request->getPost('field');
		$value = Yii::app()->request->getPost('value');
		if(is_numeric($value) && is_numeric($luong_id))  {
			Nhanvienluong::model()->updateByPk($luong_id,array($field=>$value));
		}
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return NhanvienLuong the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=NhanvienLuong::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	protected function customColumnCGridView($data, $row ,$dataColumn)
	{	
	
		if ($dataColumn->name === 'nhanvien') {
			echo '<strong>'.$data->nhanvien_ho . ' ' . $data->nhanvien_ten . '</strong></br><span class="label label-success ">NS:'.$data->nhanvien_ngaysinh.'</span><span class="label label-info ">NV:'.$data->nhanvien_ngayvao.' </span></br><span class="label label-gray ">'.$data->bophan->bophan_ten.' | '.$data->phongban->phongban_ten.'</span>';
		}
		
		if ($dataColumn->name === 'luong_tien_baohiem') {
			$form_id = $data->nhanvien_id .'luong_tien_baohiem';
			echo '<span id="label'.$form_id.'">'.number_format($data->nhanvienLuongs->luong_tien_baohiem).'&nbsp;&nbsp;</span><input type="text" name="'.$form_id.'" id="'. $form_id .'" class="form-control field text-right input-sm" data-field="luong_tien_baohiem" data-luong_id="'.$data->nhanvienLuongs->nhanvien_luong_id.'" data-nhanvien_id="'. $data->nhanvien_id .'"  value="'.$data->nhanvienLuongs->luong_tien_baohiem.'">';
			
		}
		
		if ($dataColumn->name === 'luong_coban') {
			$form_id = $data->nhanvien_id .'luong_coban';
			echo '<span id="label'.$form_id.'">'.number_format($data->nhanvienLuongs->luong_coban).'&nbsp;&nbsp;</span><input type="text" name="'.$form_id.'" id="'. $form_id .'" class="form-control field text-right input-sm" data-field="luong_coban" data-luong_id="'.$data->nhanvienLuongs->nhanvien_luong_id.'" data-nhanvien_id="'. $data->nhanvien_id .'"  value="'.$data->nhanvienLuongs->luong_coban.'">';
			
		}
		
		if ($dataColumn->name === 'luong_trachnhiem') {
			$form_id = $data->nhanvien_id .'luong_trachnhiem';
			echo '<span id="label'.$form_id.'">'.number_format($data->nhanvienLuongs->luong_trachnhiem).'&nbsp;&nbsp;</span><input type="text" name="'.$form_id.'" id="'. $form_id .'" class="form-control field text-right input-sm" data-field="luong_trachnhiem" data-luong_id="'.$data->nhanvienLuongs->nhanvien_luong_id.'"  data-nhanvien_id="'. $data->nhanvien_id .'"  value="'.$data->nhanvienLuongs->luong_trachnhiem.'">';
			
		}
		if ($dataColumn->name === 'luong_chuyencan') {
			$form_id = $data->nhanvien_id .'luong_chuyencan';
			echo '<span id="label'.$form_id.'">'.number_format($data->nhanvienLuongs->luong_chuyencan).'&nbsp;&nbsp;</span><input type="text" name="'.$form_id.'" id="'. $form_id .'" class="form-control field text-right input-sm" data-field="luong_chuyencan"  data-luong_id="'.$data->nhanvienLuongs->nhanvien_luong_id.'" data-nhanvien_id="'. $data->nhanvien_id .'"  value="'.$data->nhanvienLuongs->luong_chuyencan.'">';
			
		}
		
		if ($dataColumn->name === 'luong_pt_chuyencan') {
			$form_id = $data->nhanvien_id .'luong_pt_chuyencan';
			echo '<span id="label'.$form_id.'">'.number_format($data->nhanvienLuongs->luong_pt_chuyencan).'&nbsp;&nbsp;</span><input type="text" name="'.$form_id.'" id="'. $form_id .'" class="form-control field text-right input-sm" data-field="luong_pt_chuyencan"  data-luong_id="'.$data->nhanvienLuongs->nhanvien_luong_id.'" data-nhanvien_id="'. $data->nhanvien_id .'"  value="'.$data->nhanvienLuongs->luong_pt_chuyencan.'">';
			
		}
		
		if ($dataColumn->name === 'luong_xe') {
			$form_id = $data->nhanvien_id .'luong_xe';
			echo '<span id="label'.$form_id.'">'.number_format($data->nhanvienLuongs->luong_xe).'&nbsp;&nbsp;</span><input type="text" name="'.$form_id.'" id="'. $form_id .'" class="form-control field text-right input-sm" data-field="luong_xe"  data-luong_id="'.$data->nhanvienLuongs->nhanvien_luong_id.'" data-nhanvien_id="'. $data->nhanvien_id .'"  value="'.$data->nhanvienLuongs->luong_xe.'">';
			
		}
		
		if ($dataColumn->name === 'luong_dienthoai') {
			$form_id = $data->nhanvien_id .'luong_dienthoai';
			echo '<span id="label'.$form_id.'">'.number_format($data->nhanvienLuongs->luong_dienthoai).'&nbsp;&nbsp;</span><input type="text" name="'.$form_id.'" id="'. $form_id .'" class="form-control field text-right input-sm" data-field="luong_dienthoai"  data-luong_id="'.$data->nhanvienLuongs->nhanvien_luong_id.'" data-nhanvien_id="'. $data->nhanvien_id .'"  value="'.$data->nhanvienLuongs->luong_dienthoai.'">';
			
		}
		
		if ($dataColumn->name === 'luong_com_ngay') {
			$form_id = $data->nhanvien_id .'luong_com_ngay';
			echo '<span id="label'.$form_id.'">'.number_format($data->nhanvienLuongs->luong_com_ngay).'&nbsp;&nbsp;</span><input type="text" name="'.$form_id.'" id="'. $form_id .'" class="form-control field text-right input-sm" data-field="luong_com_ngay"  data-luong_id="'.$data->nhanvienLuongs->nhanvien_luong_id.'" data-nhanvien_id="'. $data->nhanvien_id .'"  value="'.$data->nhanvienLuongs->luong_com_ngay.'">';
			
		}
		
		if ($dataColumn->name === 'luong_cong_khac') {
			$form_id = $data->nhanvien_id .'luong_cong_khac';
			echo '<span id="label'.$form_id.'">'.number_format($data->nhanvienLuongs->luong_cong_khac).'&nbsp;&nbsp;</span><input type="text" name="'.$form_id.'" id="'. $form_id .'" class="form-control field text-right input-sm" data-field="luong_cong_khac"  data-luong_id="'.$data->nhanvienLuongs->nhanvien_luong_id.'" data-nhanvien_id="'. $data->nhanvien_id .'"  value="'.$data->nhanvienLuongs->luong_cong_khac.'">';
			
		}
		
		if ($dataColumn->name === 'luong_phuthuoc_giacanh') {
			$form_id = $data->nhanvien_id .'luong_phuthuoc_giacanh';
			echo '<span id="label'.$form_id.'">'.number_format($data->nhanvienLuongs->luong_phuthuoc_giacanh).'&nbsp;&nbsp;</span><input type="text" name="'.$form_id.'" id="'. $form_id .'" class="form-control field text-right input-sm" data-field="luong_phuthuoc_giacanh"  data-luong_id="'.$data->nhanvienLuongs->nhanvien_luong_id.'" data-nhanvien_id="'. $data->nhanvien_id .'"  value="'.$data->nhanvienLuongs->luong_phuthuoc_giacanh.'">';
			
		}
		
		if ($dataColumn->name === 'luong_tru_khac') {
			$form_id = $data->nhanvien_id .'luong_tru_khac';
			echo '<span id="label'.$form_id.'">'.number_format($data->nhanvienLuongs->luong_tru_khac).'&nbsp;&nbsp;</span><input type="text" name="'.$form_id.'" id="'. $form_id .'" class="form-control field text-right input-sm" data-field="luong_tru_khac"  data-luong_id="'.$data->nhanvienLuongs->nhanvien_luong_id.'" data-nhanvien_id="'. $data->nhanvien_id .'"  value="'.$data->nhanvienLuongs->luong_tru_khac.'">';
			
		}
		
		if ($dataColumn->name === 'luong_tru_doanphi') {
			$form_id = $data->nhanvien_id .'luong_tru_doanphi';
			echo '<span id="label'.$form_id.'">'.number_format($data->nhanvienLuongs->luong_tru_doanphi).'&nbsp;&nbsp;</span><input type="text" name="'.$form_id.'" id="'. $form_id .'" class="form-control field text-right input-sm" data-field="luong_tru_doanphi"  data-luong_id="'.$data->nhanvienLuongs->nhanvien_luong_id.'" data-nhanvien_id="'. $data->nhanvien_id .'"  value="'.$data->nhanvienLuongs->luong_tru_doanphi.'">';
			
		}
		
		if ($dataColumn->name === 'luong_ngaynghi_chophep') {
			$form_id = $data->nhanvien_id .'luong_ngaynghi_chophep';
			echo '<span id="label'.$form_id.'">'.number_format($data->nhanvienLuongs->luong_ngaynghi_chophep).'&nbsp;&nbsp;</span><input type="text" name="'.$form_id.'" id="'. $form_id .'" class="form-control field text-right input-sm" data-field="luong_ngaynghi_chophep"  data-luong_id="'.$data->nhanvienLuongs->nhanvien_luong_id.'" data-nhanvien_id="'. $data->nhanvien_id .'"  value="'.$data->nhanvienLuongs->luong_ngaynghi_chophep.'">';
			
		}
		
		if ($dataColumn->name === 'luong_ditre_chophep') {
			$form_id = $data->nhanvien_id .'luong_ditre_chophep';
			echo '<span id="label'.$form_id.'">'.number_format($data->nhanvienLuongs->luong_ditre_chophep).'&nbsp;&nbsp;</span><input type="text" name="'.$form_id.'" id="'. $form_id .'" class="form-control field text-right input-sm" data-field="luong_ditre_chophep"  data-luong_id="'.$data->nhanvienLuongs->nhanvien_luong_id.'" data-nhanvien_id="'. $data->nhanvien_id .'"  value="'.$data->nhanvienLuongs->luong_ditre_chophep.'">';
			
		}
		
		
		
		
		
		
		
		
	}


	/**
	 * Performs the AJAX validation.
	 * @param NhanvienLuong $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='nhanvien-luong-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
