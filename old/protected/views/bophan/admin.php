<?php

/* @var $this BophanController */
/* @var $model Bophan */
$this->breadcrumbs=array(
	'Bộ phận'=>array('admin'),
	'Danh sách',
);
?>

<div class="span12">
  <div class='row-fluid'>
    <div class='span12'>
      <div class='page-header'>
        <h1 class='pull-left'> <i class='icon-table'></i> <span> Bộ phận</span> </h1>
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
        <div class='actions'> <?php echo CHtml::link('<i class="icon-plus-sign-alt"></i> ',array('Bophan/create'),array('class'=>'btn btn-mini btn-link')); ?> <a class="btn box-collapse btn-mini btn-link" href="#"><i></i> </a></div>
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
            'id'=>'bophan-grid',
            'itemsCssClass'=>'table table-default table-bordered table-striped',
            'dataProvider'=>$dataProvider,
            'columns'=>array(
            		'bophan_id',
		'bophan_ma',
		'bophan_ten',
		'bophan_batdau',
		'bophan_gionghi',
		'bophan_ngaylamviec',
		/*
		'bophan_ghichu',
		'bophan_hienthi',
		'nhanvien_id',
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
