<?php

/* @var $this NhanvienNghiController */
/* @var $data NhanvienNghi */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('nghi_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nghi_id), array('view', 'id'=>$data->nghi_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_id')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nghi_loai')); ?>:</b>
	<?php echo CHtml::encode($data->nghi_loai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nghi_ngay_xin_nghi')); ?>:</b>
	<?php echo CHtml::encode($data->nghi_ngay_xin_nghi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nghi_ngaybatdau')); ?>:</b>
	<?php echo CHtml::encode($data->nghi_ngaybatdau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nghi_ngaydilamlai')); ?>:</b>
	<?php echo CHtml::encode($data->nghi_ngaydilamlai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nghi_phep')); ?>:</b>
	<?php echo CHtml::encode($data->nghi_phep); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nghi_chedo')); ?>:</b>
	<?php echo CHtml::encode($data->nghi_chedo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nghi_nv_the_viec')); ?>:</b>
	<?php echo CHtml::encode($data->nghi_nv_the_viec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nghi_lydo')); ?>:</b>
	<?php echo CHtml::encode($data->nghi_lydo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nghi_so_buoi')); ?>:</b>
	<?php echo CHtml::encode($data->nghi_so_buoi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nghi_ngay_them')); ?>:</b>
	<?php echo CHtml::encode($data->nghi_ngay_them); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nguoidung_id')); ?>:</b>
	<?php echo CHtml::encode($data->nguoidung_id); ?>
	<br />

	*/ ?>
</div>
