<?php

/* @var $this NhanvienController */
/* @var $model Nhanvien */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nhanvien-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

<p class="note">Thông tin với <span class="required">*</span> là bắt buộc.</p>
<?php if($form->errorSummary($model)){ echo  '<div class="alert alert-error"><a class="close" data-dismiss="alert" href="#">×</a><h4><i class="icon-remove-sign"></i> Lỗi</h4>' . $form->errorSummary($model,'','',array('class'=>'alert alert-error')) . '</div>'; }?>
<fieldset>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'bophan_id',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'bophan_id',array('class'=>'span12')); ?> <?php echo $form->error($model,'bophan_id'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'chucdanh_id',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'chucdanh_id',array('class'=>'span12')); ?> <?php echo $form->error($model,'chucdanh_id'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'bacluong_id',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'bacluong_id',array('class'=>'span12')); ?> <?php echo $form->error($model,'bacluong_id'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_ho',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_ho',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_ho'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_ten',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_ten',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_ten'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_mst',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_mst',array('size'=>32,'maxlength'=>32,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_mst'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_cmnd',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_cmnd',array('size'=>16,'maxlength'=>16,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_cmnd'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_cmnd_ngaycap',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_cmnd_ngaycap',array('class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_cmnd_ngaycap'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_cmnd_noicap',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_cmnd_noicap',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_cmnd_noicap'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_ngaysinh',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_ngaysinh',array('class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_ngaysinh'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_noisinh',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_noisinh',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_noisinh'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_gioitinh',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_gioitinh',array('class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_gioitinh'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_quoctich',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_quoctich',array('size'=>20,'maxlength'=>20,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_quoctich'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_honnhan',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_honnhan',array('class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_honnhan'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_tamtru',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_tamtru',array('size'=>60,'maxlength'=>255,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_tamtru'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_thuongtru',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_thuongtru',array('size'=>60,'maxlength'=>255,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_thuongtru'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_dienthoai',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_dienthoai',array('size'=>16,'maxlength'=>16,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_dienthoai'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_dienthoai_nhonhan',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_dienthoai_nhonhan',array('size'=>16,'maxlength'=>16,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_dienthoai_nhonhan'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_lylich',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textArea($model,'nhanvien_lylich',array('rows'=>6, 'cols'=>50)); ?> <?php echo $form->error($model,'nhanvien_lylich'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_kinhnghiem',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textArea($model,'nhanvien_kinhnghiem',array('rows'=>6, 'cols'=>50)); ?> <?php echo $form->error($model,'nhanvien_kinhnghiem'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_daotao',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textArea($model,'nhanvien_daotao',array('rows'=>6, 'cols'=>50)); ?> <?php echo $form->error($model,'nhanvien_daotao'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_hinhanh',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_hinhanh',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_hinhanh'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_ngayvao',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_ngayvao',array('class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_ngayvao'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_ngaynghi_trongnam',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_ngaynghi_trongnam',array('class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_ngaynghi_trongnam'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_trangthai',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_trangthai',array('class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_trangthai'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_trangthai_nghiviec',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_trangthai_nghiviec',array('class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_trangthai_nghiviec'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_thoigianthu',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_thoigianthu',array('class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_thoigianthu'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_ngayky_hdld',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_ngayky_hdld',array('class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_ngayky_hdld'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_ngaydangky_baohiem',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_ngaydangky_baohiem',array('class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_ngaydangky_baohiem'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_nganhang',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_nganhang',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_nganhang'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_sotaikhoan',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_sotaikhoan',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_sotaikhoan'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_ghichu',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textArea($model,'nhanvien_ghichu',array('rows'=>6, 'cols'=>50)); ?> <?php echo $form->error($model,'nhanvien_ghichu'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_phepnam',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_phepnam',array('class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_phepnam'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_coban',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_coban',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_coban'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_trachnhiem',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_trachnhiem',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_trachnhiem'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_chuyencan',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_chuyencan',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_chuyencan'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_dochai',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_dochai',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_dochai'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_xe',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_xe',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_xe'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_dienthoai',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_dienthoai',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_dienthoai'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_thuenha',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_thuenha',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_thuenha'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_com',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_com',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_com'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_taynghe',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_taynghe',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_taynghe'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_congkhac',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_congkhac',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_congkhac'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_thamnien',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_thamnien',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_thamnien'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_baohiem',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_baohiem',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_baohiem'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_tru_doanphi',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_tru_doanphi',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_tru_doanphi'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_giamtru_giacanh',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_giamtru_giacanh',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_giamtru_giacanh'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_ngaylamviec',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_ngaylamviec',array('size'=>60,'maxlength'=>64,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_ngaylamviec'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_ma',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_ma',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_ma'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_hoten_search',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_hoten_search',array('size'=>60,'maxlength'=>64,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_hoten_search'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_hienthi',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_hienthi',array('class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_hienthi'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nguoidung_id',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nguoidung_id',array('class'=>'span12')); ?> <?php echo $form->error($model,'nguoidung_id'); ?> </div>
    </div>
  </div>
</fieldset>
<div class="form-actions" style="margin-bottom:0">
  <div class="text-right"> <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm mới' : 'Lưu', array('class'=>'btn btn-large btn-primary')); ?> <?php echo CHtml::resetButton('Nhập lại' , array('class'=>'btn')); ?> </div>
</div>
<?php $this->endWidget(); ?>

<!-- form -->