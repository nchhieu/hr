<?php

/* @var $this NhanvienNghiController */
/* @var $model NhanvienNghi */
$this->breadcrumbs=array(
	'Nhanvien Nghis'=>array('admin'),
	'Danh sách',
);
Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('nhanvien-nghi-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="page-title">
      <div>
        <h1><i class="fa fa-edit"></i> Thông tin nghỉ viêc nhân viên: <?php echo $Nhanvien->nhanvien_ho . ' ' . $Nhanvien->nhanvien_ten .' ('. $Nhanvien->nhanvien_ngaysinh .')'; ?>  </h1>
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
              <div class="btn-group"> <?php echo CHtml::link('<i class="fa fa-plus"></i> ',array('NhanvienNghi/create','id'=>$nhanvien_id),array('class'=>'btn btn-circle btn-danger show-tooltip')); ?> <?php echo CHtml::link('<i class="fa fa-repeat"></i> ',array('NhanvienNghi/admin','id'=>$nhanvien_id),array('class'=>'btn btn-circle btn-danger show-tooltip')); ?></div>

            </div>
            <br>
            <br>
            <div class="table-responsive">
			<?php 
			$dataProvider = $model->search();
			$dataProvider->getPagination()->setPageSize( Yii::app()->params['pageSize'] );
			$this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'nhanvien-nghi-grid',
            'itemsCssClass'=>'table table-advance',
            'dataProvider'=>$dataProvider,
            'columns'=>array(
            	
		'nghiviec_tu',
		'nghiviec_den',
	
		array(
			'name' => 'nghiviec_loai',
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:90px')
		),
		
		'nghiviec_ghichu',
		/*
		'ngaythem',
		'admin_id',
		*/
            array(
            'class'=>'CButtonColumn',
			'template'=>'{delete}',
			'htmlOptions'=>array('style'=>'width:90px')
            ),
            ),
            )); ?> </div>
			
			
			</div>
        </div>
      </div>
    </div>
