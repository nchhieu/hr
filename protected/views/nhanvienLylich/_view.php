<?php

/* @var $this NhanvienLylichController */
/* @var $data NhanvienLylich */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_lylich_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nhanvien_lylich_id), array('view', 'id'=>$data->nhanvien_lylich_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_id')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_quoctich')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_quoctich); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_honnhan')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_honnhan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_tamtru')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_tamtru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_thuongtru')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_thuongtru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_lylich')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_lylich); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_kinhnghiem')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_kinhnghiem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_daotao')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_daotao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_id')); ?>:</b>
	<?php echo CHtml::encode($data->admin_id); ?>
	<br />

	*/ ?>
</div>
