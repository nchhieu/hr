<?php

/* @var $this NguoidungController */
/* @var $data Nguoidung */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('nguoidung_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nguoidung_id), array('view', 'id'=>$data->nguoidung_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nguoidung_tendangnhap')); ?>:</b>
	<?php echo CHtml::encode($data->nguoidung_tendangnhap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nguoidung_matkhau')); ?>:</b>
	<?php echo CHtml::encode($data->nguoidung_matkhau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nguoidung_hoten')); ?>:</b>
	<?php echo CHtml::encode($data->nguoidung_hoten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nguoidung_dienthoai')); ?>:</b>
	<?php echo CHtml::encode($data->nguoidung_dienthoai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nguoidung_nhom')); ?>:</b>
	<?php echo CHtml::encode($data->nguoidung_nhom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nguoidung_phanquyen')); ?>:</b>
	<?php echo CHtml::encode($data->nguoidung_phanquyen); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nguoidung_ghichu')); ?>:</b>
	<?php echo CHtml::encode($data->nguoidung_ghichu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nguoidung_quantri')); ?>:</b>
	<?php echo CHtml::encode($data->nguoidung_quantri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nguoidung_hienthi')); ?>:</b>
	<?php echo CHtml::encode($data->nguoidung_hienthi); ?>
	<br />

	*/ ?>
</div>
