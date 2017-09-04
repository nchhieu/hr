<?php

/* @var $this NhanvienNghiController */
/* @var $model NhanvienNghi */
$this->breadcrumbs=array(
	'Nhanvien Nghis'=>array('admin'),
	$model->nghi_id,
);
?> 
<div class="span12">
  <div class='row-fluid'>
    <div class='span12'>
      <div class='page-header'>
        <h1 class='pull-left'> <i class='icon-table'></i> <span>View NhanvienNghi #<?php echo $model->nghi_id; ?></span> </h1>
        <div class='pull-right'><?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
</div>
      </div>
    </div>
  </div>
  <div class='row-fluid'>
    <div class='span12 box bordered-box blue-border' style='margin-bottom:0;'>
      <div class='box-header blue-background'>
        <div class='title'>View NhanvienNghi #<?php echo $model->nghi_id; ?> </div>
        <div class='actions'><?php echo CHtml::link('<i class="icon-reply"></i> ',array('NhanvienNghi/admin'),array('class'=>'btn btn-mini btn-link')); ?> <a class="btn box-collapse btn-mini btn-link" href="#"><i></i></a></div>
      </div>
      <div class='box-content'> <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-default table-bordered table-striped'),
        'attributes'=>array(
        		'nghi_id',
		'nhanvien_id',
		'nghi_loai',
		'nghi_ngay_xin_nghi',
		'nghi_ngaybatdau',
		'nghi_ngaydilamlai',
		'nghi_phep',
		'nghi_chedo',
		'nghi_nv_the_viec',
		'nghi_lydo',
		'nghi_so_buoi',
		'nghi_ngay_them',
		'nguoidung_id',
        ),
        )); ?></div>
    </div>
  </div>
</div>
