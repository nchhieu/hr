<?php

/* @var $this NhanvienController */
/* @var $model Nhanvien */
$this->breadcrumbs=array(
	'Nhanviens'=>array('admin'),
	$model->nhanvien_id,
);
?> 
<div class="page-title">
<div>
  <h2> <i class="fa fa-desktop"></i> Quản lý Nhanvien #<?php echo $model->nhanvien_id; ?></h2>
  <h4></h4>
</div>
<div id="breadcrumbs"><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
<?php $this->widget('application.components.Inform');?>
<div class="row">
  <div class="col-md-12">
    <div class="box ">
      <div class="box-title">
        <h3> Thông tin Nhanvien #<?php echo $model->nhanvien_id; ?> </h3>
        <div class="box-tool"><?php echo CHtml::link('<i class="fa fa-mail-reply"></i> ',array('Nhanvien/admin')); ?>  &nbsp;  <?php echo CHtml::link('<i class="fa fa-plus"></i> ',array('Nhanvien/create')); ?> &nbsp; <a data-action="collapse" href="#"><i class='fa fa-chevron-up'></i> </a></div>
      </div>
      <div class="box-content"> <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-default table-bordered table-striped'),
        'attributes'=>array(
        		'nhanvien_id',
		'nhanvien_ma',
		'bophan_id',
		'chucdanh_id',
		'nhanvien_ho',
		'nhanvien_ten',
		'nhanvien_mst',
		'nhanvien_cmnd',
		'nhanvien_cmnd_ngaycap',
		'nhanvien_cmnd_noicap',
		'nhanvien_ngaysinh',
		'nhanvien_noisinh',
		'nhanvien_gioitinh',
		'nhanvien_dienthoai',
		'nhanvien_dienthoai_nhonhan',
		'nhanvien_hinhanh',
		'nhanvien_ngayvao',
		'nhanvien_trangthai',
		'nhanvien_trangthai_nghiviec',
		'nhanvien_thoigianthu',
		'nhanvien_ngayky_hdld',
		'nhanvien_ngaydangky_baohiem',
		'nhanvien_nganhang',
		'nhanvien_sotaikhoan',
		'nhanvien_ghichu',
		'nhanvien_phepnam',
		'nhanvien_hoten_search',
		'admin_id',
        ),
        )); ?></div>
    </div>
  </div>
</div>
</div>
