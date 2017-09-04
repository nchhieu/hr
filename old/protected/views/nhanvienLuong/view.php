<?php

/* @var $this NhanvienLuongController */
/* @var $model NhanvienLuong */
$this->breadcrumbs=array(
	'Nhanvien Luongs'=>array('admin'),
	$model->luong_id,
);
?> 
<div class="span12">
  <div class='row-fluid'>
    <div class='span12'>
      <div class='page-header'>
        <h1 class='pull-left'> <i class='icon-table'></i> <span>View NhanvienLuong #<?php echo $model->luong_id; ?></span> </h1>
        <div class='pull-right'><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
      </div>
    </div>
  </div>
  <div class='row-fluid'>
    <div class='span12 box bordered-box blue-border' style='margin-bottom:0;'>
      <div class='box-header blue-background'>
        <div class='title'>View NhanvienLuong #<?php echo $model->luong_id; ?> </div>
        <div class='actions'><?php echo CHtml::link('<i class="icon-reply"></i> ',array('NhanvienLuong/admin'),array('class'=>'btn btn-mini btn-link')); ?> <a class="btn box-collapse btn-mini btn-link" href="#"><i></i></a></div>
      </div>
      <div class='box-content'> <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-default table-bordered table-striped'),
        'attributes'=>array(
        		'luong_id',
		'nhanvien_id',
		'bacluong_id',
		'luong_thang',
		'luong_nam',
		'luong_ngaycong_thang',
		'luong_ngaycong',
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
		'luong_com',
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
		'nguoidung_id',
        ),
        )); ?></div>
    </div>
  </div>
</div>
