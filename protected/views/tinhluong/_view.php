<?php

/* @var $this TinhluongController */
/* @var $data Tinhluong */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->luong_id), array('view', 'id'=>$data->luong_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_luong_id')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_luong_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_id')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bacluong_id')); ?>:</b>
	<?php echo CHtml::encode($data->bacluong_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_thang')); ?>:</b>
	<?php echo CHtml::encode($data->luong_thang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_nam')); ?>:</b>
	<?php echo CHtml::encode($data->luong_nam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_congthuc')); ?>:</b>
	<?php echo CHtml::encode($data->luong_congthuc); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_ngaycong_thang')); ?>:</b>
	<?php echo CHtml::encode($data->luong_ngaycong_thang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_ngaycong_thucte')); ?>:</b>
	<?php echo CHtml::encode($data->luong_ngaycong_thucte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_nghi_cophpep')); ?>:</b>
	<?php echo CHtml::encode($data->luong_nghi_cophpep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_nghi_khongphep')); ?>:</b>
	<?php echo CHtml::encode($data->luong_nghi_khongphep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_ngay_ditre')); ?>:</b>
	<?php echo CHtml::encode($data->luong_ngay_ditre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_coban')); ?>:</b>
	<?php echo CHtml::encode($data->luong_coban); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_coban_thucte')); ?>:</b>
	<?php echo CHtml::encode($data->luong_coban_thucte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_trachnhiem')); ?>:</b>
	<?php echo CHtml::encode($data->luong_trachnhiem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_chuyencan_phantram')); ?>:</b>
	<?php echo CHtml::encode($data->luong_chuyencan_phantram); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_chuyencan')); ?>:</b>
	<?php echo CHtml::encode($data->luong_chuyencan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_dochai')); ?>:</b>
	<?php echo CHtml::encode($data->luong_dochai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_xe')); ?>:</b>
	<?php echo CHtml::encode($data->luong_xe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_guixe')); ?>:</b>
	<?php echo CHtml::encode($data->luong_guixe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_dienthoai')); ?>:</b>
	<?php echo CHtml::encode($data->luong_dienthoai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_thuenha')); ?>:</b>
	<?php echo CHtml::encode($data->luong_thuenha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_com_ngay')); ?>:</b>
	<?php echo CHtml::encode($data->luong_com_ngay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_com_thanhtien')); ?>:</b>
	<?php echo CHtml::encode($data->luong_com_thanhtien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_taynghe')); ?>:</b>
	<?php echo CHtml::encode($data->luong_taynghe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_doanhso')); ?>:</b>
	<?php echo CHtml::encode($data->luong_doanhso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_ngoaigio_150')); ?>:</b>
	<?php echo CHtml::encode($data->luong_ngoaigio_150); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_ngoaigio_195')); ?>:</b>
	<?php echo CHtml::encode($data->luong_ngoaigio_195); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_ngoaigio_200')); ?>:</b>
	<?php echo CHtml::encode($data->luong_ngoaigio_200); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_ngoaigio_300')); ?>:</b>
	<?php echo CHtml::encode($data->luong_ngoaigio_300); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_ngoaigio_thanhtien')); ?>:</b>
	<?php echo CHtml::encode($data->luong_ngoaigio_thanhtien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_thamnien')); ?>:</b>
	<?php echo CHtml::encode($data->luong_thamnien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_cong_khac')); ?>:</b>
	<?php echo CHtml::encode($data->luong_cong_khac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_baohiem')); ?>:</b>
	<?php echo CHtml::encode($data->luong_baohiem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_tru_doanphi')); ?>:</b>
	<?php echo CHtml::encode($data->luong_tru_doanphi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_tru_thunhap')); ?>:</b>
	<?php echo CHtml::encode($data->luong_tru_thunhap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_tru_khac')); ?>:</b>
	<?php echo CHtml::encode($data->luong_tru_khac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_tongcong')); ?>:</b>
	<?php echo CHtml::encode($data->luong_tongcong); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_thuclanh')); ?>:</b>
	<?php echo CHtml::encode($data->luong_thuclanh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_ghichu')); ?>:</b>
	<?php echo CHtml::encode($data->luong_ghichu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_ngaytinh')); ?>:</b>
	<?php echo CHtml::encode($data->luong_ngaytinh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_id')); ?>:</b>
	<?php echo CHtml::encode($data->admin_id); ?>
	<br />

	*/ ?>
</div>
