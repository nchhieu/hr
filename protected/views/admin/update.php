<?php

/* @var $this AdminController */
/* @var $model Admin */
$this->breadcrumbs=array(
	'Quản lý nhân viên'=>array('admin'),
	$model->admin_id=>array('view','id'=>$model->admin_id),
	'Cập nhật thông tin',
);
?>

<div class="page-title">
  <div>
    <h2> <i class="fa fa-user"></i> Quản lý nhân viên </h2>
    <h4></h4>
  </div>
  <div id="breadcrumbs">
    <?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box ">
        <div class="box-title">
          <h3><i class="fa fa-bars"></i> Cập nhật thông tin nhân viên # <?php echo $model->admin_id; ?></h3>
          <div class="box-tool"><?php echo CHtml::link('<i class="icon-reply"></i>',array('Admin/admin'),array('class'=>'btn btn-mini btn-link')); ?> <a data-action="collapse" href="#"><i class='fa fa-chevron-up'></i> </a> </div>
        </div>
        <div class="box-content"> <?php echo $this->renderPartial('_update', array('model'=>$model)); ?></div>
      </div>
    </div>
  </div>
</div>
