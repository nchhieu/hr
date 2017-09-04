<?php

/* @var $this NhanvienLuongController */
/* @var $data NhanvienLuong */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_luong_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nhanvien_luong_id), array('view', 'id'=>$data->nhanvien_luong_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_id')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bacluong_id')); ?>:</b>
	<?php echo CHtml::encode($data->bacluong_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_coban')); ?>:</b>
	<?php echo CHtml::encode($data->luong_coban); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_trachnhiem')); ?>:</b>
	<?php echo CHtml::encode($data->luong_trachnhiem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_chuyencan')); ?>:</b>
	<?php echo CHtml::encode($data->luong_chuyencan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_dochai')); ?>:</b>
	<?php echo CHtml::encode($data->luong_dochai); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_xe')); ?>:</b>
	<?php echo CHtml::encode($data->luong_xe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_dienthoai')); ?>:</b>
	<?php echo CHtml::encode($data->luong_dienthoai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_thuenha')); ?>:</b>
	<?php echo CHtml::encode($data->luong_thuenha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_com_thang')); ?>:</b>
	<?php echo CHtml::encode($data->luong_com_thang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_com_ngay')); ?>:</b>
	<?php echo CHtml::encode($data->luong_com_ngay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_taynghe')); ?>:</b>
	<?php echo CHtml::encode($data->luong_taynghe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_thamnien')); ?>:</b>
	<?php echo CHtml::encode($data->luong_thamnien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_doanhso')); ?>:</b>
	<?php echo CHtml::encode($data->luong_doanhso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_cong_khac')); ?>:</b>
	<?php echo CHtml::encode($data->luong_cong_khac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_tru_khac')); ?>:</b>
	<?php echo CHtml::encode($data->luong_tru_khac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_tru_baohiem')); ?>:</b>
	<?php echo CHtml::encode($data->luong_tru_baohiem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_tru_doanphi')); ?>:</b>
	<?php echo CHtml::encode($data->luong_tru_doanphi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_giamtru_giacanh')); ?>:</b>
	<?php echo CHtml::encode($data->luong_giamtru_giacanh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_ngaylamviec')); ?>:</b>
	<?php echo CHtml::encode($data->luong_ngaylamviec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_trangthai')); ?>:</b>
	<?php echo CHtml::encode($data->luong_trangthai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_ngaythem')); ?>:</b>
	<?php echo CHtml::encode($data->luong_ngaythem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_id')); ?>:</b>
	<?php echo CHtml::encode($data->admin_id); ?>
	<br />

	*/ ?>
</div>
