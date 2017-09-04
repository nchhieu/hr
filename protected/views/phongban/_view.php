<?php

/* @var $this PhongbanController */
/* @var $data Phongban */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('phongban_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->phongban_id), array('view', 'id'=>$data->phongban_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bophan_id')); ?>:</b>
	<?php echo CHtml::encode($data->bophan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phongban_ten')); ?>:</b>
	<?php echo CHtml::encode($data->phongban_ten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phongban_trangthai')); ?>:</b>
	<?php echo CHtml::encode($data->phongban_trangthai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_id')); ?>:</b>
	<?php echo CHtml::encode($data->admin_id); ?>
	<br />

</div>
