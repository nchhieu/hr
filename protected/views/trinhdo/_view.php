<?php

/* @var $this TrinhdoController */
/* @var $data Trinhdo */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('trinhdo_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->trinhdo_id), array('view', 'id'=>$data->trinhdo_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trinhdo_ten')); ?>:</b>
	<?php echo CHtml::encode($data->trinhdo_ten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trinhdo_hienthi')); ?>:</b>
	<?php echo CHtml::encode($data->trinhdo_hienthi); ?>
	<br />

</div>
