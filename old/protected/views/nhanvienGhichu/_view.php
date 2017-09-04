<?php

/* @var $this NhanvienGhichuController */
/* @var $data NhanvienGhichu */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('ghichu_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ghichu_id), array('view', 'id'=>$data->ghichu_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_id')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chude_id')); ?>:</b>
	<?php echo CHtml::encode($data->chude_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ghichu_tieude')); ?>:</b>
	<?php echo CHtml::encode($data->ghichu_tieude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ghichu_noidung')); ?>:</b>
	<?php echo CHtml::encode($data->ghichu_noidung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ghichu_ngay')); ?>:</b>
	<?php echo CHtml::encode($data->ghichu_ngay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nguoidung_id')); ?>:</b>
	<?php echo CHtml::encode($data->nguoidung_id); ?>
	<br />

</div>
