<?php

/* @var $this ChucdanhController */
/* @var $model Chucdanh */
$this->breadcrumbs=array(
	'Chucdanhs'=>array('admin'),
	$model->chucdanh_id=>array('view','id'=>$model->chucdanh_id),
	'Cập nhật',
);
?> 
<div class="page-title">
  <div>
    <h2> <i class="fa fa-desktop"></i>  Cập nhật chức danh: <?php echo $model->chucdanh_ten; ?> </h2>
    <h4></h4>
  </div>
  <div id="breadcrumbs"><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-title">
          <h3><i class="fa fa-bars"></i>  Cập nhật Chucdanh # <?php echo $model->chucdanh_id; ?></h3>
        <div class="box-tool"><?php echo CHtml::link('<i class="fa fa-mail-reply"></i>',array('Chucdanh/admin')); ?> <?php echo CHtml::link('<i class="fa fa-plus"></i>',array('Chucdanh/create')); ?>    <a data-action="collapse" href="#"><i class='fa fa-chevron-up'></i> </a> </div>
        </div>
        <div class="box-content"> <?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>
      </div>
    </div>
  </div>
</div>
