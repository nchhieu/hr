<?php

/* @var $this NhanvienLylichController */
/* @var $model NhanvienLylich */
$this->breadcrumbs=array(
	'Nhanvien Lyliches'=>array('admin'),
	$model->nhanvien_lylich_id,
);
?> 
<div class="page-title">
<div>
  <h2> <i class="fa fa-desktop"></i> Quản lý NhanvienLylich #<?php echo $model->nhanvien_lylich_id; ?></h2>
  <h4></h4>
</div>
<div id="breadcrumbs"><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box ">
      <div class="box-title">
        <h3> Thông tin NhanvienLylich #<?php echo $model->nhanvien_lylich_id; ?> </h3>
        <div class="box-tool"><?php echo CHtml::link('<i class="fa fa-mail-reply"></i> ',array('NhanvienLylich/admin')); ?>  &nbsp;  <?php echo CHtml::link('<i class="fa fa-plus"></i> ',array('NhanvienLylich/create')); ?> &nbsp; <a data-action="collapse" href="#"><i class='fa fa-chevron-up'></i> </a></div>
      </div>
      <div class="box-content"> <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-default table-bordered table-striped'),
        'attributes'=>array(
        		'nhanvien_lylich_id',
		'nhanvien_id',
		'nhanvien_quoctich',
		'nhanvien_honnhan',
		'nhanvien_tamtru',
		'nhanvien_thuongtru',
		'nhanvien_lylich',
		'nhanvien_kinhnghiem',
		'nhanvien_daotao',
		'admin_id',
        ),
        )); ?></div>
    </div>
  </div>
</div>
</div>
