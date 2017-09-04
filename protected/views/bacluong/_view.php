<?php

/* @var $this BacluongController */
/* @var $data Bacluong */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('bacluong_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bacluong_id), array('view', 'id'=>$data->bacluong_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bacluong_ma')); ?>:</b>
	<?php echo CHtml::encode($data->bacluong_ma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bacluong_sotien')); ?>:</b>
	<?php echo CHtml::encode($data->bacluong_sotien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bacluong_ghichu')); ?>:</b>
	<?php echo CHtml::encode($data->bacluong_ghichu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bacluong_hienthi')); ?>:</b>
	<?php echo CHtml::encode($data->bacluong_hienthi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_id')); ?>:</b>
	<?php echo CHtml::encode($data->admin_id); ?>
	<br />

</div>
