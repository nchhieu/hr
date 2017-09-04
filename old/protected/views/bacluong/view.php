<?php

/* @var $this BacluongController */
/* @var $model Bacluong */
$this->breadcrumbs=array(
	'Bacluongs'=>array('admin'),
	$model->bacluong_id,
);
?> 
<div class="span12">
  <div class='row-fluid'>
    <div class='span12'>
      <div class='page-header'>
        <h1 class='pull-left'> <i class='icon-table'></i> <span>View Bacluong #<?php echo $model->bacluong_id; ?></span> </h1>
        <div class='pull-right'><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
      </div>
    </div>
  </div>
  <div class='row-fluid'>
    <div class='span12 box bordered-box blue-border' style='margin-bottom:0;'>
      <div class='box-header blue-background'>
        <div class='title'>View Bacluong #<?php echo $model->bacluong_id; ?> </div>
        <div class='actions'><?php echo CHtml::link('<i class="icon-reply"></i> ',array('Bacluong/admin'),array('class'=>'btn btn-mini btn-link')); ?> <a class="btn box-collapse btn-mini btn-link" href="#"><i></i></a></div>
      </div>
      <div class='box-content'> <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-default table-bordered table-striped'),
        'attributes'=>array(
        		'bacluong_id',
		'bacluong_ma',
		'bacluong_sotien',
		'bacluong_ghichu',
		'bacluong_hienthi',
		'nhanvien_id',
        ),
        )); ?></div>
    </div>
  </div>
</div>
