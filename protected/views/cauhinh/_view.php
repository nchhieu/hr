<?php

/* @var $this CauhinhController */
/* @var $data Cauhinh */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('cauhinh_key')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cauhinh_key), array('view', 'id'=>$data->cauhinh_key)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cauhinh_giatri')); ?>:</b>
	<?php echo CHtml::encode($data->cauhinh_giatri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cauhinh_mota')); ?>:</b>
	<?php echo CHtml::encode($data->cauhinh_mota); ?>
	<br />

</div>
