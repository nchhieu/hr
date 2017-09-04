<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Quên mật khẩu';
$this->breadcrumbs=array(
	'Quên mật khẩu',
);
?>

<div id='wrapper'>
  <div class='application'>
    <div class='application-content'> <a href='/'>
      <div class='icon-shopping-cart'></div>
      <span>Nhanh Nhanh</span> </a> </div>
  </div>
  <div class='controls'>
    <div class='caret'></div>
    <div class='form-wrapper'>
      <h1 class='text-center'>Quên mật khẩu</h1>
      <?php $form=$this->beginWidget('CActiveForm', array('id'=>'login-form','enableClientValidation'=>true,'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>
      <div class='row-fluid'>
        <div class='span12 icon-over-input'> <?php echo $form->textField($model,'username', array('class'=>'span12','placeholder'=>'Email' )); ?> <i class='icon-user muted'></i> <?php echo $form->error($model,'username'); ?></div>
      </div>
      <?php echo CHtml::submitButton('Tạo mật khẩu', array('class'=>'btn btn-block')); ?>
      <?php $this->endWidget(); ?>
      <div class='text-center'>
        <hr class='hr-normal'>
        Vui lòng nhập email để tạo lại mật khẩu. </div>
    </div>
  </div>
</div>
