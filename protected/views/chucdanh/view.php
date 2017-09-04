<?php

/* @var $this ChucdanhController */
/* @var $model Chucdanh */
$this->breadcrumbs=array(
	'Chucdanhs'=>array('admin'),
	$model->chucdanh_id,
);
?> 
<div class="page-title">
<div>
  <h2> <i class="fa fa-desktop"></i> Thông tin chức danh: <?php echo $model->chucdanh_ten; ?></h2>
  <h4></h4>
</div>
<div id="breadcrumbs"><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box ">
      <div class="box-title">
        <h3> Thông tin Chucdanh #<?php echo $model->chucdanh_id; ?> </h3>
        <div class="box-tool"><?php echo CHtml::link('<i class="fa fa-mail-reply"></i> ',array('Chucdanh/admin')); ?>  &nbsp;  <?php echo CHtml::link('<i class="fa fa-plus"></i> ',array('Chucdanh/create')); ?> &nbsp; <a data-action="collapse" href="#"><i class='fa fa-chevron-up'></i> </a></div>
      </div>
      <div class="box-content"> <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-default table-bordered table-striped'),
        'attributes'=>array(
        		'chucdanh_id',
		'bophan_id',
		'chucdanh_ma',
		'chucdanh_ten',
		'chucdanh_ghichu',
		'chucdanh_hienthi',
		'admin_id',
        ),
        )); ?></div>
    </div>
  </div>
</div>
</div>
