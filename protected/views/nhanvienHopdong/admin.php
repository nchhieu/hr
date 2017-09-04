<?php

/* @var $this NhanvienHopdongController */
/* @var $model NhanvienHopdong */
$this->breadcrumbs=array(
	'Nhanvien Hopdongs'=>array('admin'),
	'Danh sách',
);
Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('nhanvien-hopdong-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="page-title">
      <div>
        <h1><i class="fa fa-edit"></i> Quản lý Nhanvien Hopdongs</h1>
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
              <div class="btn-group"> <?php echo CHtml::link('<i class="fa fa-plus"></i> ',array('NhanvienHopdong/create'),array('class'=>'btn btn-circle btn-danger show-tooltip')); ?> <?php echo CHtml::link('<i class="fa fa-repeat"></i> ',array('NhanvienHopdong/admin'),array('class'=>'btn btn-circle btn-danger show-tooltip')); ?></div>

            </div>
            <br>
            <br>
            <div class="table-responsive">
			<?php 
			$dataProvider = $model->search();
			$dataProvider->getPagination()->setPageSize( Yii::app()->params['pageSize'] );
			$this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'nhanvien-hopdong-grid',
            'itemsCssClass'=>'table table-advance',
            'dataProvider'=>$dataProvider,
            'columns'=>array(
            		'hopdong_id',
		'nhanvien_id',
		'bophan_id',
		'chucdanh_id',
		'hopdong_ma',
		'hopdong_ngaybatdau',
		/*
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
