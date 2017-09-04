<?php

/* @var $this PhongbanController */
/* @var $model Phongban */
$this->breadcrumbs=array(
	'Phongbans'=>array('admin'),
	$model->phongban_id,
);
?> 
<div class="page-title">
<div>
  <h2> <i class="fa fa-desktop"></i> Thông tin phòng ban: <?php echo $model->phongban_ten; ?></h2>
  <h4></h4>
</div>
<div id="breadcrumbs"><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box box-pink">
      <div class="box-title">
        <h3> Thông tin Phongban #<?php echo $model->phongban_id; ?> </h3>
        <div class="box-tool"><?php echo CHtml::link('<i class="fa fa-mail-reply"></i> ',array('Phongban/admin')); ?>  &nbsp;  <?php echo CHtml::link('<i class="fa fa-plus"></i> ',array('Phongban/create')); ?> &nbsp; <a data-action="collapse" href="#"><i class='fa fa-chevron-up'></i> </a></div>
      </div>
      <div class="box-content"> <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-default table-bordered table-striped'),
        'attributes'=>array(
        		'phongban_id',
		'bophan_id',
		'phongban_ten',
		'phongban_trangthai',
		'admin_id',
        ),
        )); ?></div>
    </div>
  </div>
</div>
</div>
