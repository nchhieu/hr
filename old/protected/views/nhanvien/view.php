<?php

/* @var $this NhanvienController */
/* @var $model Nhanvien */
$this->breadcrumbs=array(
	'Nhanviens'=>array('admin'),
	$model->nhanvien_id,
);
?> 
<div class="span12">
  <div class='row-fluid'>
    <div class='span12'>
      <div class='page-header'>
        <h1 class='pull-left'> <i class='icon-table'></i> <span>View Nhanvien #<?php echo $model->nhanvien_id; ?></span> </h1>
        <div class='pull-right'><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
      </div>
    </div>
  </div>
  <div class='row-fluid'>
    <div class='span12 box bordered-box blue-border' style='margin-bottom:0;'>
      <div class='box-header blue-background'>
        <div class='title'>View Nhanvien #<?php echo $model->nhanvien_id; ?> </div>
        <div class='actions'><?php echo CHtml::link('<i class="icon-reply"></i> ',array('Nhanvien/admin'),array('class'=>'btn btn-mini btn-link')); ?> <a class="btn box-collapse btn-mini btn-link" href="#"><i></i></a></div>
      </div>
      <div class='box-content'> <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-default table-bordered table-striped'),
        'attributes'=>array(
        		'nhanvien_id',
		'bophan_id',
		'chucdanh_id',
		'bacluong_id',
		'nhanvien_ho',
		'nhanvien_ten',
		'nhanvien_mst',
		'nhanvien_cmnd',
		'nhanvien_cmnd_ngaycap',
		'nhanvien_cmnd_noicap',
		'nhanvien_ngaysinh',
		'nhanvien_noisinh',
		'nhanvien_gioitinh',
		'nhanvien_quoctich',
		'nhanvien_honnhan',
		'nhanvien_tamtru',
		'nhanvien_thuongtru',
		'nhanvien_dienthoai',
		'nhanvien_dienthoai_nhonhan',
		'nhanvien_lylich',
		'nhanvien_kinhnghiem',
		'nhanvien_daotao',
		'nhanvien_hinhanh',
		'nhanvien_ngayvao',
		'nhanvien_ngaynghi_trongnam',
		'nhanvien_trangthai',
		'nhanvien_trangthai_nghiviec',
		'nhanvien_thoigianthu',
		'nhanvien_ngayky_hdld',
		'nhanvien_ngaydangky_baohiem',
		'nhanvien_nganhang',
		'nhanvien_sotaikhoan',
		'nhanvien_ghichu',
		'nhanvien_phepnam',
		'luong_coban',
		'luong_trachnhiem',
		'luong_chuyencan',
		'luong_dochai',
		'luong_xe',
		'luong_dienthoai',
		'luong_thuenha',
		'luong_com',
		'luong_taynghe',
		'luong_congkhac',
		'luong_thamnien',
		'luong_baohiem',
		'luong_tru_doanphi',
		'luong_giamtru_giacanh',
		'luong_ngaylamviec',
		'nhanvien_ma',
		'nhanvien_hoten_search',
		'nhanvien_hienthi',
		'nguoidung_id',
        ),
        )); ?></div>
    </div>
  </div>
</div>
