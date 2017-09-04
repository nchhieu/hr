<?php

/* @var $this NhanvienController */
/* @var $data Nhanvien */
?>
<div class="view">
  	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nhanvien_id), array('view', 'id'=>$data->nhanvien_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bophan_id')); ?>:</b>
	<?php echo CHtml::encode($data->bophan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chucdanh_id')); ?>:</b>
	<?php echo CHtml::encode($data->chucdanh_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bacluong_id')); ?>:</b>
	<?php echo CHtml::encode($data->bacluong_id); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_dienthoai')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_dienthoai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_dienthoai_nhonhan')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_dienthoai_nhonhan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_lylich')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_lylich); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_kinhnghiem')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_kinhnghiem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_daotao')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_daotao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_hinhanh')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_hinhanh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_ngayvao')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_ngayvao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_ngaynghi_trongnam')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_ngaynghi_trongnam); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_xe')); ?>:</b>
	<?php echo CHtml::encode($data->luong_xe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_dienthoai')); ?>:</b>
	<?php echo CHtml::encode($data->luong_dienthoai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_thuenha')); ?>:</b>
	<?php echo CHtml::encode($data->luong_thuenha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_com')); ?>:</b>
	<?php echo CHtml::encode($data->luong_com); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_taynghe')); ?>:</b>
	<?php echo CHtml::encode($data->luong_taynghe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_congkhac')); ?>:</b>
	<?php echo CHtml::encode($data->luong_congkhac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_thamnien')); ?>:</b>
	<?php echo CHtml::encode($data->luong_thamnien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luong_baohiem')); ?>:</b>
	<?php echo CHtml::encode($data->luong_baohiem); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_ma')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_ma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_hoten_search')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_hoten_search); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nhanvien_hienthi')); ?>:</b>
	<?php echo CHtml::encode($data->nhanvien_hienthi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nguoidung_id')); ?>:</b>
	<?php echo CHtml::encode($data->nguoidung_id); ?>
	<br />

	*/ ?>
</div>
