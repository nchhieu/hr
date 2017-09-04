<?php

/* @var $this NhanvienGhichuController */
/* @var $model NhanvienGhichu */
$this->breadcrumbs=array(
	'Nhanvien Ghichus'=>array('admin'),
	$model->ghichu_id,
);
?> 
<div class="page-title">
<div>
  <h2> <i class="fa fa-desktop"></i> Quản lý NhanvienGhichu #<?php echo $model->ghichu_id; ?></h2>
  <h4></h4>
</div>
<div id="breadcrumbs"><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box ">
      <div class="box-title">
        <h3> Thông tin NhanvienGhichu #<?php echo $model->ghichu_id; ?> </h3>
        <div class="box-tool"><?php echo CHtml::link('<i class="fa fa-mail-reply"></i> ',array('NhanvienGhichu/admin')); ?>  &nbsp;  <?php echo CHtml::link('<i class="fa fa-plus"></i> ',array('NhanvienGhichu/create')); ?> &nbsp; <a data-action="collapse" href="#"><i class='fa fa-chevron-up'></i> </a></div>
      </div>
      <div class="box-content"> <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-default table-bordered table-striped'),
        'attributes'=>array(
        		'ghichu_id',
		'nhanvien_id',
		'chude_id',
		'ghichu_tieude',
		'ghichu_noidung',
		'ghichu_ngay',
		'admin_id',
        ),
        )); ?></div>
    </div>
  </div>
</div>
</div>
