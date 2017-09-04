z<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Đăng nhập';
$this->breadcrumbs=array(
	'Login',
);
?>

<div id='wrapper'>
  <div class='application'>
    <div class='application-content'> <a href='#'>
      <div class='icon-calendar'></div>
      <span>Wisteria</span> </a> </div>
  </div>
  <div class='controls'>
    <div class='caret'></div>
    <div class='form-wrapper'>
      <h1 class='text-center'>Đăng nhập</h1>
      <?php $form=$this->beginWidget('CActiveForm', array('id'=>'login-form','enableClientValidation'=>true,'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>
      <div class='row-fluid'>
        <div class='span12 icon-over-input'> <?php echo $form->textField($model,'username', array('class'=>'span12','placeholder'=>'Email' )); ?> <i class='icon-user muted'></i> </div>
      </div>
      <div class='row-fluid'>
        <div class='span12 icon-over-input'> <?php echo $form->passwordField($model,'password', array('class'=>'span12','placeholder'=>'Mật khẩu' )); ?> <i class='icon-lock muted'></i> </div>
      </div>
      <label class='checkbox' for='remember_me'> <?php echo $form->checkBox($model,'rememberMe',array('class'=>'rem_me')); ?> Đăng nhập tự động lần sau </label>
      <?php echo CHtml::submitButton('Đăng nhập', array('class'=>'btn btn-block')); ?>
      <?php $this->endWidget(); ?>
      <div class='text-center'>
        <hr class='hr-normal'>
        <?php
		echo CHtml::link('Quên mật khẩu ?',array('site/forgot'));
        ?> </div>
    </div>
  </div>
  <div class='login-action text-center'> <a href='#'> <i class='icon-user'></i> Đăng ký tài khoản mới ? <strong>Đăng ký</strong> </a> </div>
</div>
