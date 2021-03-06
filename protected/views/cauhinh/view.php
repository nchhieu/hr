<?php

/* @var $this CauhinhController */
/* @var $model Cauhinh */
$this->breadcrumbs=array(
	'Cauhinhs'=>array('admin'),
	$model->cauhinh_key,
);
?> 
<div class="page-title">
<div>
  <h2> <i class="fa fa-desktop"></i> Quản lý Cauhinh #<?php echo $model->cauhinh_key; ?></h2>
  <h4></h4>
</div>
<div id="breadcrumbs"><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box box-pink">
      <div class="box-title">
        <h3> Thông tin Cauhinh #<?php echo $model->cauhinh_key; ?> </h3>
        <div class="box-tool"><?php echo CHtml::link('<i class="fa fa-mail-reply"></i> ',array('Cauhinh/admin')); ?>  &nbsp;  <?php echo CHtml::link('<i class="fa fa-plus"></i> ',array('Cauhinh/create')); ?> &nbsp; <a data-action="collapse" href="#"><i class='fa fa-chevron-up'></i> </a></div>
      </div>
      <div class="box-content"> <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-default table-bordered table-striped'),
        'attributes'=>array(
        		'cauhinh_key',
		'cauhinh_giatri',
		'cauhinh_mota',
        ),
        )); ?></div>
    </div>
  </div>
</div>
</div>
