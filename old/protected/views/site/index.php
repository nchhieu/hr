<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$this->breadcrumbs=array(
	'My diary'=>array('index'),
);
?>

<div class="span12">
  <div class='row-fluid'>
    <div class="span12">
      <div class='page-header'>
        <h1 class='pull-left'> <i class='icon-calendar'></i> <span>Welcome</span> </h1>
        <div class='pull-right'>
          <?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,)); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span8 box">
      <div class='box-header'>
        <div class='title'>Welcome !</div>
      </div>
      <div class='box-content'>
        <div class="full-calendar"></div>
      </div>
    </div>
    
  </div>
</div>
