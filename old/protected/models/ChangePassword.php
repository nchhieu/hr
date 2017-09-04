<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class ChangePassword extends CFormModel
{
	public $matkhaucu;
	public $matkhaumoi;
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('matkhaucu, matkhaumoi', 'required'),
			array('matkhaucu', 'checkPassword'),
			// rememberMe needs to be a boolean
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'matkhaucu'=>'Current password',
			'matkhaumoi'=>'New Password',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function checkPassword($attribute,$params)
	{
		$check = User::model()->findbyPk(Yii::app()->user->getState('user_id') );
		if( $check->user_password !=  $this->matkhaucu){
			$this->addError($attribute,'You have enter wrong password');
		}
	}

}
