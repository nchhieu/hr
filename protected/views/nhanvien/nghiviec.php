<?php

/* @var $this NhanvienController */
/* @var $model Nhanvien */
$this->breadcrumbs=array(
	'Nhanviens'=>array('admin'),
	'Danh sách',
);
Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('nhanvien-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="page-title">
  <div>
    <h1><i class="fa fa-edit"></i> Nhân viên đã nghỉ việc</h1>
  </div>
</div>
<!-- END Page Title --> 

<!-- BEGIN Breadcrumb -->
<?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>

<!-- END Breadcrumb -->
<?php $this->widget('application.components.Inform');?>
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
          <div class="btn-group"> <?php echo CHtml::link('<i class="fa fa-plus"></i> ',array('Nhanvien/create'),array('class'=>'btn btn-circle btn-danger show-tooltip')); ?> <?php echo CHtml::link('<i class="fa fa-repeat"></i> ',array('Nhanvien/admin'),array('class'=>'btn btn-circle btn-danger show-tooltip')); ?></div>
        </div>
       
        <div class="table-responsive">
          <?php 
			$dataProvider = $model->search();
			$dataProvider->getPagination()->setPageSize( Yii::app()->params['pageSize'] );
			$this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'nhanvien-grid',
            'itemsCssClass'=>'table table-advance table-hover',
            'dataProvider'=>$dataProvider,
            'columns'=>array(
			array(
			'name' => 'functions',
			'header' => '',
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:40px')
		),
		array(
			'name' => 'nhanvien_id',
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:40px')
		),
		array(
			'name' => 'nhanvien_ma',
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:60px')
		),
		array(
			'name' => 'bophan.bophan_ma',
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:90px')
		),
		/*
		array(
			'name' => 'chucdanh.chucdanh_ma',
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:90px')
		),
		*/
		array(
			'name' => 'nhanvien_ho',
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:150px')
		),
		array(
			'name' => 'nhanvien_ten',
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:70px')
		),
		array(
			'name' => 'nhanvien_ngaysinh',
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:90px')
		),
		
		
		array(
			'name' => 'nhanvien_cmnd',
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:80px')
		),

		array(
			'name' => 'nhanvien_ngayvao',
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:90px')
		),
		
		array(
			'name' => 'nhanvien_ngayky_hdld',
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:90px')
		),
		
		array(
			'name' => 'nhanvien_trangthai',
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:100px')
		),
		'nhanvien_ghichu',
		
		   
            ),
            )); ?>
        </div>
      </div>
    </div>
  </div>
</div>
