<?php

/* @var $this ThanhphoController */
/* @var $data Thanhpho */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('thanhpho_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->thanhpho_id), array('view', 'id'=>$data->thanhpho_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thanhpho_ten')); ?>:</b>
	<?php echo CHtml::encode($data->thanhpho_ten); ?>
	<br />

</div>
