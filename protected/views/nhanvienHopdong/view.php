<?php

/* @var $this NhanvienHopdongController */
/* @var $model NhanvienHopdong */
$this->breadcrumbs=array(
	'Nhanvien Hopdongs'=>array('admin'),
	$model->hopdong_id,
);
?> 
<div class="page-title">
<div>
  <h2> <i class="fa fa-desktop"></i> Quản lý NhanvienHopdong #<?php echo $model->hopdong_id; ?></h2>
  <h4></h4>
</div>
<div id="breadcrumbs"><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box ">
      <div class="box-title">
        <h3> Thông tin NhanvienHopdong #<?php echo $model->hopdong_id; ?> </h3>
        <div class="box-tool"><?php echo CHtml::link('<i class="fa fa-mail-reply"></i> ',array('NhanvienHopdong/admin')); ?>  &nbsp;  <?php echo CHtml::link('<i class="fa fa-plus"></i> ',array('NhanvienHopdong/create')); ?> &nbsp; <a data-action="collapse" href="#"><i class='fa fa-chevron-up'></i> </a></div>
      </div>
      <div class="box-content"> <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-default table-bordered table-striped'),
        'attributes'=>array(
        		'hopdong_id',
		'nhanvien_id',
		'bophan_id',
		'chucdanh_id',
		'hopdong_ma',
		'hopdong_ngaybatdau',
		'hopdong_ngayketthuc',
		'hopdong_thuviec_tungay',
		'hopdong_thuviec_denngay',
		'hopdong_thoihan',
		'hopdong_mucluong_canban',
		'hopdong_phucap',
		'hopdong_chucdanh',
		'hopdong_chucdanh_en',
		'hopdong_thoigian_lamviec',
		'hopdong_thoigian_lamviec_en',
		'hopdong_mota_congviec',
		'hopdong_mota_congviec_en',
		'hopdong_diadiem_lamviec',
		'hopdong_diadiem_lamviec_en',
		'hopdong_ngaythem',
		'admin_id',
        ),
        )); ?></div>
    </div>
  </div>
</div>
</div>
