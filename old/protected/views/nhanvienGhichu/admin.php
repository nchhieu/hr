<?php

/* @var $this NhanvienGhichuController */
/* @var $model NhanvienGhichu */
$this->breadcrumbs=array(
	'Ghi chú nhân viên'=>array('admin'),
	'Danh sách',
);
?>

<div class="span12">
  <div class='row-fluid'>
    <div class='span12'>
      <div class='page-header'>
        <h1 class='pull-left'> <i class='icon-table'></i> <span>Ghi chú</span> </h1>
        <div class='pull-right'>
          <?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
        </div>
      </div>
    </div>
  </div>
  <div class='row-fluid'>
    <div class='span12 box bordered-box blue-border' style='margin-bottom:0;'>
      <div class='box-header blue-background'>
        <div class='title'>Tìm kiếm</div>
        <div class='actions'> <?php echo CHtml::link('<i class="icon-plus-sign-alt"></i> ',array('NhanvienGhichu/create'),array('class'=>'btn btn-mini btn-link')); ?> <a class="btn box-collapse btn-mini btn-link" href="#"><i></i> </a></div>
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
            'id'=>'nhanvien-ghichu-grid',
            'itemsCssClass'=>'table table-default table-bordered table-striped',
            'dataProvider'=>$dataProvider,
            'columns'=>array(
            		'ghichu_id',
		'nhanvien_id',
		'chude_id',
		'ghichu_tieude',
		'ghichu_noidung',
		'ghichu_ngay',
		/*
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
