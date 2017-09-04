<?php

class SiteController extends Controller
{
	
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			//////'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('index','Logout','view','delete','create','update'),
				'users'=>array('@'),
			),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('Login','forgot','forgotinfo','resetpassword'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$this->layout='//layouts/user';
		$this->render('index');
	}
	
	public function actionSetting()
	{
		$this->layout='//layouts/user';
		$this->render('setting');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the login page
	 */
        
	public function actionLogin()
	{
		$this->layout='//layouts/login';
		$this->pageTitle = 'Shop Nhanh Nhanh  -  Đăng nhập';
		$model=new LoginForm;
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
                           $this->redirect(array('nhanvien/admin'));
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}
	
	/**
	 * Displays the login page
	 */
	public function actionResetpassword($id, $code)
	{
		$this->layout='//layouts/login';
		$this->pageTitle = 'Shop Nhanh Nhanh - Đổi mật khẩu';
		$model = Nhanvien::model()->findbyPk($id);
		$password = md5($model->mat_khau);
		if($password == $code){
			$template = 'resetpassword';
		}else{
			$template = 'reseterror';
		}
		$model->mat_khau = '';
		if(isset($_POST['Nhanvien']))
		{
			$model->attributes=$_POST['Nhanvien'];
			if($model->save()){
				// send email
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
				$headers .= 'From: Nhanh Nhanh <info@nhanhnhanh.vn>' . "\r\n";
				$fullname = $model->ho_ten;
				$link = 'http://'.Yii::app()->request->getServerName();
				$link .= $this->createUrl('site/login');
				
				// get template
				$handle = fopen("./mail/resetpasssuccess.html", "r");
				$templates = fread($handle, filesize("./mail/resetpasssuccess.html"));
				fclose($handle);
				$templates = str_replace("#fullname#",	$fullname,	$templates);
				$templates = str_replace("#username#",	$model->ten_dang_nhap,	$templates);
				$templates = str_replace("#password#",	$model->mat_khau,	$templates);
				$templates = str_replace("#link#",		$link,		$templates);
				
				if(mail($model->ten_dang_nhap, "Nhanh Nhanh - Thay đổi mật khẩu thành công !",$templates, $headers)){
					$this->redirect(array('site/login'));
				}else{
					$this->redirect(array('site/login'));
				}
			}
			
			
			
		}
		// display the login form
		$this->render($template,array('model'=>$model));
	}
	
	public function actionForgot()
	{
		$this->layout='//layouts/login';
		$this->pageTitle = 'Shop Nhanh Nhanh - Thay đổi mật khẩu';
		$model=new Forgot;
		
		if(isset($_POST['Forgot']))
		{
			$model->attributes=$_POST['Forgot'];
			// validate user input and redirect to the previous page if valid
			if($model->validate()){
				// send email
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
				$headers .= 'From: Nhanh Nhanh <info@nhanhnhanh.vn>' . "\r\n";
				
				$Nhanvien = Nhanvien::model()->findByAttributes(array('ten_dang_nhap'=>$model->username));
				$fullname = $Nhanvien->ho_ten;
				$link = 'http://'.Yii::app()->request->getServerName();
				$link .= $this->createUrl('site/resetpassword',array('id'=>$Nhanvien->nhanvien_id,'code'=>md5($Nhanvien->mat_khau)));
				$link2 = '<a href="'. $link .'" target="_blank"  >' . $link . '</a>';
				
				
				
				// get template
				$handle = fopen("./mail/resetpassword.html", "r");
				$templates = fread($handle, filesize("./mail/resetpassword.html"));
				fclose($handle);
				$templates = str_replace("#fullname#",	$fullname,	$templates);
				$templates = str_replace("#username#",	$model->username,	$templates);
				$templates = str_replace("#link#",		$link,		$templates);
				$templates = str_replace("#link2#",		$link2,		$templates);
				
				if(mail($model->username, "Shop Nhanh Nhanh - Thay đổi mật khẩu!",$templates, $headers)){
					$this->redirect( array('forgotinfo','user'=>$model->username) );
				}else{
					$this->redirect( array('forgotinfo','user'=>$model->username) );
				}
				
			}
		}
		// display the login form
		$this->render('forgot',array('model'=>$model));
	}
	
	public function actionForgotinfo($user)
	{
		$this->layout='//layouts/login';
		$this->pageTitle = 'Shop Nhanh Nhanh - Thay đổi mật khẩu';
		// display the login form
		$this->render('forgotinfo',array('email'=>$user));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}