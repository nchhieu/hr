<?php

/* @var $this BophanController */
/* @var $model Bophan */
$this->breadcrumbs=array(
	'Bophans'=>array('admin'),
	$model->bophan_id,
);
?> 
<div class="page-title">
<div>
  <h2> <i class="fa fa-desktop"></i> Thông tin bộ phận: <?php echo $model->bophan_ten; ?></h2>
  <h4></h4>
</div>
<div id="breadcrumbs"><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box ">
      <div class="box-title">
        <h3> Thông tin Bophan #<?php echo $model->bophan_id; ?> </h3>
        <div class="box-tool"><?php echo CHtml::link('<i class="fa fa-mail-reply"></i> ',array('Bophan/admin')); ?>  &nbsp;  <?php echo CHtml::link('<i class="fa fa-plus"></i> ',array('Bophan/create')); ?> &nbsp; <a data-action="collapse" href="#"><i class='fa fa-chevron-up'></i> </a></div>
      </div>
      <div class="box-content"> <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-default table-bordered table-striped'),
        'attributes'=>array(
        		'bophan_id',
		'bophan_ma',
		'bophan_ten',
		'bophan_batdau',
		'bophan_gionghi',
		'bophan_ngaylamviec',
		'bophan_congthucluong',
		'bophan_ghichu',
		'bophan_hienthi',
		'admin_id',
        ),
        )); ?></div>
    </div>
  </div>
</div>
</div>
