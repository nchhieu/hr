<?php

/* @var $this NhanvienHopdongController */
/* @var $model NhanvienHopdong */
$this->breadcrumbs=array(
	'Hợp đồng lao động'=>array('admin'),
	'Danh sách',
);
?>

<div class="span12">
  <div class='row-fluid'>
    <div class='span12'>
      <div class='page-header'>
        <h1 class='pull-left'> <i class='icon-table'></i> <span>Hợp đồng lao động</span> </h1>
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
        <div class='actions'> <?php echo CHtml::link('<i class="icon-plus-sign-alt"></i> ',array('NhanvienHopdong/create'),array('class'=>'btn btn-mini btn-link')); ?> <a class="btn box-collapse btn-mini btn-link" href="#"><i></i> </a></div>
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
            'id'=>'nhanvien-hopdong-grid',
            'itemsCssClass'=>'table table-default table-bordered table-striped',
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
