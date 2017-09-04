<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
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
      <div class='text-center'>
        <hr class='hr-normal'>
        Vui lòng kiểm tra email
        <h3><?php echo $email;?></h3>
        để thay đổi mật khầu. </div>
    </div>
  </div>
  <div class='login-action text-center'> <?php echo CHtml::link('<i class="icon-user"></i> Đăng nhập',array('login')) ?></div>
</div>
