<?php

/* @var $this BophanController */
/* @var $data Bophan */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('bophan_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bophan_id), array('view', 'id'=>$data->bophan_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bophan_ma')); ?>:</b>
	<?php echo CHtml::encode($data->bophan_ma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bophan_ten')); ?>:</b>
	<?php echo CHtml::encode($data->bophan_ten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bophan_batdau')); ?>:</b>
	<?php echo CHtml::encode($data->bophan_batdau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bophan_gionghi')); ?>:</b>
	<?php echo CHtml::encode($data->bophan_gionghi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bophan_ngaylamviec')); ?>:</b>
	<?php echo CHtml::encode($data->bophan_ngaylamviec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bophan_congthucluong')); ?>:</b>
	<?php echo CHtml::encode($data->bophan_congthucluong); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('bophan_ghichu')); ?>:</b>
	<?php echo CHtml::encode($data->bophan_ghichu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bophan_hienthi')); ?>:</b>
	<?php echo CHtml::encode($data->bophan_hienthi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_id')); ?>:</b>
	<?php echo CHtml::encode($data->admin_id); ?>
	<br />

	*/ ?>
</div>
