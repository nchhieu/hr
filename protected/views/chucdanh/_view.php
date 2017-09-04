<?php

/* @var $this ChucdanhController */
/* @var $data Chucdanh */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('chucdanh_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->chucdanh_id), array('view', 'id'=>$data->chucdanh_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bophan_id')); ?>:</b>
	<?php echo CHtml::encode($data->bophan_id); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_id')); ?>:</b>
	<?php echo CHtml::encode($data->admin_id); ?>
	<br />

</div>
