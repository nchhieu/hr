<?php

/* @var $this TinhluongController */
/* @var $model Tinhluong */
$this->breadcrumbs=array(
	'Tinhluongs'=>array('admin'),
	$model->luong_id,
);
?> 
<div class="page-title">
<div>
  <h2> <i class="fa fa-desktop"></i> Quản lý Tinhluong #<?php echo $model->luong_id; ?></h2>
  <h4></h4>
</div>
<div id="breadcrumbs"><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box ">
      <div class="box-title">
        <h3> Thông tin Tinhluong #<?php echo $model->luong_id; ?> </h3>
        <div class="box-tool"><?php echo CHtml::link('<i class="fa fa-mail-reply"></i> ',array('Tinhluong/admin')); ?>  &nbsp;  <?php echo CHtml::link('<i class="fa fa-plus"></i> ',array('Tinhluong/create')); ?> &nbsp; <a data-action="collapse" href="#"><i class='fa fa-chevron-up'></i> </a></div>
      </div>
      <div class="box-content"> <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-default table-bordered table-striped'),
        'attributes'=>array(
        		'luong_id',
		'nhanvien_luong_id',
		'nhanvien_id',
		'bacluong_id',
		'luong_thang',
		'luong_nam',
		'luong_congthuc',
		'luong_ngaycong_thang',
		'luong_ngaycong_thucte',
		'luong_nghi_cophpep',
		'luong_nghi_khongphep',
		'luong_ngay_ditre',
		'luong_coban',
		'luong_coban_thucte',
		'luong_trachnhiem',
		'luong_chuyencan_phantram',
		'luong_chuyencan',
		'luong_dochai',
		'luong_xe',
		'luong_guixe',
		'luong_dienthoai',
		'luong_thuenha',
		'luong_com_ngay',
		'luong_com_thanhtien',
		'luong_taynghe',
		'luong_doanhso',
		'luong_ngoaigio_150',
		'luong_ngoaigio_195',
		'luong_ngoaigio_200',
		'luong_ngoaigio_300',
		'luong_ngoaigio_thanhtien',
		'luong_thamnien',
		'luong_cong_khac',
		'luong_baohiem',
		'luong_tru_doanphi',
		'luong_tru_thunhap',
		'luong_tru_khac',
		'luong_tongcong',
		'luong_thuclanh',
		'luong_ghichu',
		'luong_ngaytinh',
		'admin_id',
        ),
        )); ?></div>
    </div>
  </div>
</div>
</div>
