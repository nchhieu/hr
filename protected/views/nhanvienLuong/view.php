<?php

/* @var $this NhanvienLuongController */
/* @var $model NhanvienLuong */
$this->breadcrumbs=array(
	'Nhanvien Luongs'=>array('admin'),
	$model->nhanvien_luong_id,
);
?> 
<div class="page-title">
<div>
  <h2> <i class="fa fa-desktop"></i> Quản lý NhanvienLuong #<?php echo $model->nhanvien_luong_id; ?></h2>
  <h4></h4>
</div>
<div id="breadcrumbs"><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box ">
      <div class="box-title">
        <h3> Thông tin NhanvienLuong #<?php echo $model->nhanvien_luong_id; ?> </h3>
        <div class="box-tool"><?php echo CHtml::link('<i class="fa fa-mail-reply"></i> ',array('NhanvienLuong/admin')); ?>  &nbsp;  <?php echo CHtml::link('<i class="fa fa-plus"></i> ',array('NhanvienLuong/create')); ?> &nbsp; <a data-action="collapse" href="#"><i class='fa fa-chevron-up'></i> </a></div>
      </div>
      <div class="box-content"> <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-default table-bordered table-striped'),
        'attributes'=>array(
        		'nhanvien_luong_id',
		'nhanvien_id',
		'bacluong_id',
		'luong_coban',
		'luong_trachnhiem',
		'luong_chuyencan',
		'luong_dochai',
		'luong_xe',
		'luong_dienthoai',
		'luong_thuenha',
		'luong_com_thang',
		'luong_com_ngay',
		'luong_taynghe',
		'luong_thamnien',
		'luong_doanhso',
		'luong_cong_khac',
		'luong_tru_khac',
		'luong_tru_baohiem',
		'luong_tru_doanphi',
		'luong_giamtru_giacanh',
		'luong_ngaylamviec',
		'luong_trangthai',
		'luong_ngaythem',
		'admin_id',
        ),
        )); ?></div>
    </div>
  </div>
</div>
</div>
