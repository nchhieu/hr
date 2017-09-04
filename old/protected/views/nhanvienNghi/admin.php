<?php

/* @var $this NhanvienNghiController */
/* @var $model NhanvienNghi */
$this->breadcrumbs=array(
	'Nhanvien Nghis'=>array('admin'),
	'Danh sách',
);
?>

<div class="span12">
  <div class='row-fluid'>
    <div class='span12'>
      <div class='page-header'>
        <h1 class='pull-left'> <i class='icon-table'></i> <span>Nghỉ phép</span> </h1>
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
        <div class='actions'> <?php echo CHtml::link('<i class="icon-plus-sign-alt"></i> ',array('NhanvienNghi/create'),array('class'=>'btn btn-mini btn-link')); ?> <a class="btn box-collapse btn-mini btn-link" href="#"><i></i> </a></div>
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
            'id'=>'nhanvien-nghi-grid',
            'itemsCssClass'=>'table table-default table-bordered table-striped',
            'dataProvider'=>$dataProvider,
            'columns'=>array(
            		'nghi_id',
		'nhanvien_id',
		'nghi_loai',
		'nghi_ngay_xin_nghi',
		'nghi_ngaybatdau',
		'nghi_ngaydilamlai',
		/*
		'nghi_phep',
		'nghi_chedo',
		'nghi_nv_the_viec',
		'nghi_lydo',
		'nghi_so_buoi',
		'nghi_ngay_them',
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
