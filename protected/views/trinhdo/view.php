<?php

/* @var $this TrinhdoController */
/* @var $model Trinhdo */
$this->breadcrumbs=array(
	'Trinhdos'=>array('admin'),
	$model->trinhdo_id,
);
?> 
<div class="page-title">
<div>
  <h2> <i class="fa fa-desktop"></i> Thông tin trình độ: <?php echo $model->trinhdo_ten; ?></h2>
  <h4></h4>
</div>
<div id="breadcrumbs"><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box box-pink">
      <div class="box-title">
        <h3> Thông tin Trinhdo #<?php echo $model->trinhdo_id; ?> </h3>
        <div class="box-tool"><?php echo CHtml::link('<i class="fa fa-mail-reply"></i> ',array('Trinhdo/admin')); ?>  &nbsp;  <?php echo CHtml::link('<i class="fa fa-plus"></i> ',array('Trinhdo/create')); ?> &nbsp; <a data-action="collapse" href="#"><i class='fa fa-chevron-up'></i> </a></div>
      </div>
      <div class="box-content"> <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-default table-bordered table-striped'),
        'attributes'=>array(
        		'trinhdo_id',
		'trinhdo_ten',
		'trinhdo_hienthi',
        ),
        )); ?></div>
    </div>
  </div>
</div>
</div>
