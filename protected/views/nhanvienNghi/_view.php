<?php

/* @var $this NhanvienNghiController */
/* @var $data NhanvienNghi */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_nghi_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nhanvien_nghi_id), array('view', 'id'=>$data->nhanvien_nghi_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_id')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nghiviec_tu')); ?>:</b>
	<?php echo CHtml::encode($data->nghiviec_tu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nghiviec_den')); ?>:</b>
	<?php echo CHtml::encode($data->nghiviec_den); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nghiviec_loai')); ?>:</b>
	<?php echo CHtml::encode($data->nghiviec_loai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nghiviec_ghichu')); ?>:</b>
	<?php echo CHtml::encode($data->nghiviec_ghichu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ngaythem')); ?>:</b>
	<?php echo CHtml::encode($data->ngaythem); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_id')); ?>:</b>
	<?php echo CHtml::encode($data->admin_id); ?>
	<br />

	*/ ?>
</div>
