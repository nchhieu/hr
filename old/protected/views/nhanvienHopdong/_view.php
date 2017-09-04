<?php

/* @var $this NhanvienHopdongController */
/* @var $data NhanvienHopdong */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->hopdong_id), array('view', 'id'=>$data->hopdong_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_id')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bophan_id')); ?>:</b>
	<?php echo CHtml::encode($data->bophan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chucdanh_id')); ?>:</b>
	<?php echo CHtml::encode($data->chucdanh_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_ma')); ?>:</b>
	<?php echo CHtml::encode($data->hopdong_ma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_ngaybatdau')); ?>:</b>
	<?php echo CHtml::encode($data->hopdong_ngaybatdau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_ngayketthuc')); ?>:</b>
	<?php echo CHtml::encode($data->hopdong_ngayketthuc); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_thuviec_tungay')); ?>:</b>
	<?php echo CHtml::encode($data->hopdong_thuviec_tungay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_thuviec_denngay')); ?>:</b>
	<?php echo CHtml::encode($data->hopdong_thuviec_denngay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_thoihan')); ?>:</b>
	<?php echo CHtml::encode($data->hopdong_thoihan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_mucluong_canban')); ?>:</b>
	<?php echo CHtml::encode($data->hopdong_mucluong_canban); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_phucap')); ?>:</b>
	<?php echo CHtml::encode($data->hopdong_phucap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_chucdanh')); ?>:</b>
	<?php echo CHtml::encode($data->hopdong_chucdanh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_chucdanh_en')); ?>:</b>
	<?php echo CHtml::encode($data->hopdong_chucdanh_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_thoigian_lamviec')); ?>:</b>
	<?php echo CHtml::encode($data->hopdong_thoigian_lamviec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_thoigian_lamviec_en')); ?>:</b>
	<?php echo CHtml::encode($data->hopdong_thoigian_lamviec_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_mota_congviec')); ?>:</b>
	<?php echo CHtml::encode($data->hopdong_mota_congviec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_mota_congviec_en')); ?>:</b>
	<?php echo CHtml::encode($data->hopdong_mota_congviec_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_diadiem_lamviec')); ?>:</b>
	<?php echo CHtml::encode($data->hopdong_diadiem_lamviec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_diadiem_lamviec_en')); ?>:</b>
	<?php echo CHtml::encode($data->hopdong_diadiem_lamviec_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hopdong_ngaythem')); ?>:</b>
	<?php echo CHtml::encode($data->hopdong_ngaythem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nguoidung_id')); ?>:</b>
	<?php echo CHtml::encode($data->nguoidung_id); ?>
	<br />

	*/ ?>
</div>
