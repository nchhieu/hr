<?php

/* @var $this NhanvienController */
/* @var $model Nhanvien */
$this->breadcrumbs=array(
	'Nhanviens'=>array('admin'),
	'Danh sách',
);
?>

<div class="span12">
  <div class='row-fluid'>
    <div class='span12'>
      <div class='page-header'>
        <h1 class='pull-left'> <i class='icon-table'></i> <span> Danh sách nhân viên</span> </h1>
        <div class='pull-right'>
          <?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
        </div>
      </div>
    </div>
  </div>
  <div class='row-fluid'>
    <div class='span12 box bordered-box blue-border' style='margin-bottom:0;'>
      <div class='box-header blue-background'>
        <div class='title'>Tìm kiếm </div>
        <div class='actions'> <?php echo CHtml::link('<i class="icon-plus-sign-alt"></i> ',array('Nhanvien/create'),array('class'=>'btn btn-mini btn-link')); ?> <a class="btn box-collapse btn-mini btn-link" href="#"><i></i> </a></div>
      </div>
      <div class='box-content'>
        <?php $this->renderPartial('_search',array(
						'model'=>$model,
					)); ?>
      </div>
    </div>
  </div>
  <div class='row-fluid'>
    <div class='span12 box' style='margin-bottom:0;'>
      <div class='box-content box-no-padding'>
        <div class='responsive-table'>
          <div class='scrollable-area'>
            <?php 
			$dataProvider = $model->search();
			$dataProvider->getPagination()->setPageSize( Yii::app()->params['pageSize'] );
$this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'nhanvien-grid',
            'itemsCssClass'=>'table table-default table-bordered table-striped',
            'dataProvider'=>$dataProvider,
            'columns'=>array(
            		'nhanvien_id',
		'bophan_id',
		'chucdanh_id',
		'bacluong_id',
		'nhanvien_ho',
		'nhanvien_ten',
		/*
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
		'nhanvien_hoten_Tìm kiếm',
		'nhanvien_hienthi',
		'nguoidung_id',
		*/
            array(
            'class'=>'CButtonColumn',
            ),
            ),
            )); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
