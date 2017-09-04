<?php

/* @var $this NhanvienNghiController */
/* @var $model NhanvienNghi */
$this->breadcrumbs=array(
	'Nhanvien Nghis'=>array('admin'),
	$model->nhanvien_nghi_id,
);
?> 
<div class="page-title">
<div>
  <h2> <i class="fa fa-desktop"></i> Quản lý NhanvienNghi #<?php echo $model->nhanvien_nghi_id; ?></h2>
  <h4></h4>
</div>
<div id="breadcrumbs"><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box ">
      <div class="box-title">
        <h3> Thông tin NhanvienNghi #<?php echo $model->nhanvien_nghi_id; ?> </h3>
        <div class="box-tool"><?php echo CHtml::link('<i class="fa fa-mail-reply"></i> ',array('NhanvienNghi/admin')); ?>  &nbsp;  <?php echo CHtml::link('<i class="fa fa-plus"></i> ',array('NhanvienNghi/create')); ?> &nbsp; <a data-action="collapse" href="#"><i class='fa fa-chevron-up'></i> </a></div>
      </div>
      <div class="box-content"> <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-default table-bordered table-striped'),
        'attributes'=>array(
        		'nhanvien_nghi_id',
		'nhanvien_id',
		'nghiviec_tu',
		'nghiviec_den',
		'nghiviec_loai',
		'nghiviec_ghichu',
		'ngaythem',
		'admin_id',
        ),
        )); ?></div>
    </div>
  </div>
</div>
</div>
