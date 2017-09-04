<?php

/* @var $this BannerController */
/* @var $model Banner */
$this->breadcrumbs=array(
	'Home'=>array('admin'),
	'Manage',
);
?>

<div class="page-title">
  <div>
    <h1><i class="fa fa-thumbs-up"></i> Hi ! <?php echo Yii::app()->user->getState('admin_name'); ?></h1>
  </div>
</div>
<!-- END Page Title --> 

<!-- BEGIN Breadcrumb -->
<div id="breadcrumbs">
  <ul class="breadcrumb">
    <li class="active"><i class="fa fa-home"></i> Home</li>
  </ul>
</div>
<!-- END Breadcrumb -->


