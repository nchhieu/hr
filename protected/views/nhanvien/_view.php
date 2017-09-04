<?php

/* @var $this NhanvienController */
/* @var $data Nhanvien */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nhanvien_id), array('view', 'id'=>$data->nhanvien_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_ma')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_ma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bophan_id')); ?>:</b>
	<?php echo CHtml::encode($data->bophan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chucdanh_id')); ?>:</b>
	<?php echo CHtml::encode($data->chucdanh_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_ho')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_ho); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_ten')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_ten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_mst')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_mst); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_cmnd')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_cmnd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_cmnd_ngaycap')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_cmnd_ngaycap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_cmnd_noicap')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_cmnd_noicap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_ngaysinh')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_ngaysinh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_noisinh')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_noisinh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_gioitinh')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_gioitinh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_dienthoai')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_dienthoai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_dienthoai_nhonhan')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_dienthoai_nhonhan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_hinhanh')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_hinhanh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_ngayvao')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_ngayvao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_trangthai')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_trangthai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_trangthai_nghiviec')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_trangthai_nghiviec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_thoigianthu')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_thoigianthu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_ngayky_hdld')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_ngayky_hdld); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_ngaydangky_baohiem')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_ngaydangky_baohiem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_nganhang')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_nganhang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_sotaikhoan')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_sotaikhoan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_ghichu')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_ghichu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_phepnam')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_phepnam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_hoten_search')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_hoten_search); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_id')); ?>:</b>
	<?php echo CHtml::encode($data->admin_id); ?>
	<br />

	*/ ?>
</div>
