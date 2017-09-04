<?php

/* @var $this NguoidungController */
/* @var $model Nguoidung */
$this->breadcrumbs=array(
	'Nguoidungs'=>array('admin'),
	$model->nguoidung_id=>array('view','id'=>$model->nguoidung_id),
	'Update',
);
?> 
<div class="span12">
  <div class='row-fluid'>
    <div class='span12'>
      <div class='page-header'>
        <h1 class='pull-left'> <i class='icon-table'></i> <span> Update Nguoidung # <?php echo $model->nguoidung_id; ?> </span> </h1>
        <div class='pull-right'><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
      </div>
    </div>
  </div>
  <div class='row-fluid'>
    <div class='span12 box bordered-box blue-border' style='margin-bottom:0;'>
      <div class='box-header blue-background'>
        <div class='title'>Update Nguoidung # <?php echo $model->nguoidung_id; ?></div>
        <div class='actions'><?php echo CHtml::link('<i class="icon-reply"></i>',array('Nguoidung/admin'),array('class'=>'btn btn-mini btn-link')); ?> <a class="btn box-collapse btn-mini btn-link" href="#"><i></i> </a> </div>
      </div>
      <div class='box-content'>
        <div class='row-fluid'> <?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>
      </div>
    </div>
  </div>
</div>