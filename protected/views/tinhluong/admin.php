<?php

/* @var $this TinhluongController */
/* @var $model Tinhluong */
$this->breadcrumbs=array(
	'Tinhluongs'=>array('admin'),
	'Danh sách',
);
Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tinhluong-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="page-title">
      <div>
        <h1><i class="fa fa-edit"></i> Quản lý Tinhluongs</h1>
      </div>
    </div>
    <!-- END Page Title --> 

	<!-- BEGIN Breadcrumb -->
	<?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
 
	<!-- END Breadcrumb -->
	
	
	
  <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-title">
            <h3><i class="fa  fa-search"></i> Tìm kiếm </h3>
            <div class="box-tool"> <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a> <a data-action="close" href="#"><i class="fa fa-times"></i></a> </div>
          </div>
          <div class="box-content search-form">
            <div class="row form">
			<?php $this->renderPartial('_search',array(
						'model'=>$model,
					)); ?>
 
			
			</div>
            <div class="clearfix"></div>
            <div class="btn-toolbar pull-right">
              <div class="btn-group"> <?php echo CHtml::link('<i class="fa fa-plus"></i> ',array('Tinhluong/create'),array('class'=>'btn btn-circle btn-danger show-tooltip')); ?> <?php echo CHtml::link('<i class="fa fa-repeat"></i> ',array('Tinhluong/admin'),array('class'=>'btn btn-circle btn-danger show-tooltip')); ?></div>

            </div>
            <br>
            <br>
            <div class="table-responsive">
			<?php 
			$dataProvider = $model->search();
			$dataProvider->getPagination()->setPageSize( Yii::app()->params['pageSize'] );
			$this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'tinhluong-grid',
            'itemsCssClass'=>'table table-advance',
            'dataProvider'=>$dataProvider,
            'columns'=>array(
            		'luong_id',
		'nhanvien_luong_id',
		'nhanvien_id',
		'bacluong_id',
		'luong_thang',
		'luong_nam',
		/*
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
		*/
            array(
            'class'=>'CButtonColumn',
			'htmlOptions'=>array('style'=>'width:90px')
            ),
            ),
            )); ?> </div>
			
			
			</div>
        </div>
      </div>
    </div>
