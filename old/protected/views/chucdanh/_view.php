<?php

/* @var $this ChucdanhController */
/* @var $data Chucdanh */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('chucdanh_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->chucdanh_id), array('view', 'id'=>$data->chucdanh_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chucdanh_ma')); ?>:</b>
	<?php echo CHtml::encode($data->chucdanh_ma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chucdanh_ten')); ?>:</b>
	<?php echo CHtml::encode($data->chucdanh_ten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chucdanh_ghichu')); ?>:</b>
	<?php echo CHtml::encode($data->chucdanh_ghichu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chucdanh_hienthi')); ?>:</b>
	<?php echo CHtml::encode($data->chucdanh_hienthi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_id')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_id); ?>
	<br />

</div>
