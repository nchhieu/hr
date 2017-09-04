<?php

/* @var $this NhanvienLuongController */
/* @var $model NhanvienLuong */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nhanvien-luong-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

<p class="note">Thông tin với <span class="required">*</span> là bắt buộc.</p>
<?php if($form->errorSummary($model)){ echo  '<div class="alert alert-error"><a class="close" data-dismiss="alert" href="#">×</a><h4><i class="icon-remove-sign"></i> Lỗi</h4>' . $form->errorSummary($model,'','',array('class'=>'alert alert-error')) . '</div>'; }?>
<fieldset>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_id',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_id',array('class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_id'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'bacluong_id',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'bacluong_id',array('class'=>'span12')); ?> <?php echo $form->error($model,'bacluong_id'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_thang',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_thang',array('class'=>'span12')); ?> <?php echo $form->error($model,'luong_thang'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_nam',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_nam',array('class'=>'span12')); ?> <?php echo $form->error($model,'luong_nam'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_ngaycong_thang',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_ngaycong_thang',array('class'=>'span12')); ?> <?php echo $form->error($model,'luong_ngaycong_thang'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_ngaycong',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_ngaycong',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_ngaycong'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_coban',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_coban',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_coban'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_coban_thucte',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_coban_thucte',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_coban_thucte'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_trachnhiem',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_trachnhiem',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_trachnhiem'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_chuyencan_phantram',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_chuyencan_phantram',array('size'=>4,'maxlength'=>4,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_chuyencan_phantram'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_chuyencan',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_chuyencan',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_chuyencan'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_dochai',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_dochai',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_dochai'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_xe',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_xe',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_xe'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_guixe',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_guixe',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_guixe'); ?> </div>
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
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_doanhso',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_doanhso',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_doanhso'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_ngoaigio_150',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_ngoaigio_150',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_ngoaigio_150'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_ngoaigio_195',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_ngoaigio_195',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_ngoaigio_195'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_ngoaigio_200',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_ngoaigio_200',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_ngoaigio_200'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_ngoaigio_300',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_ngoaigio_300',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_ngoaigio_300'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_ngoaigio_thanhtien',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_ngoaigio_thanhtien',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_ngoaigio_thanhtien'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_thamnien',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_thamnien',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_thamnien'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_cong_khac',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_cong_khac',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_cong_khac'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_baohiem',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_baohiem',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_baohiem'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_tru_doanphi',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_tru_doanphi',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_tru_doanphi'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_tru_thunhap',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_tru_thunhap',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_tru_thunhap'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_tru_khac',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_tru_khac',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_tru_khac'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_tongcong',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_tongcong',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_tongcong'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_thuclanh',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_thuclanh',array('size'=>10,'maxlength'=>10,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_thuclanh'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_ghichu',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_ghichu',array('size'=>60,'maxlength'=>64,'class'=>'span12')); ?> <?php echo $form->error($model,'luong_ghichu'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'luong_ngaytinh',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'luong_ngaytinh',array('class'=>'span12')); ?> <?php echo $form->error($model,'luong_ngaytinh'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nguoidung_id',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nguoidung_id',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> <?php echo $form->error($model,'nguoidung_id'); ?> </div>
    </div>
  </div>
</fieldset>
<div class="form-actions" style="margin-bottom:0">
  <div class="text-right"> <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm mới' : 'Lưu', array('class'=>'btn btn-large btn-primary')); ?> <?php echo CHtml::resetButton('Nhập lại' , array('class'=>'btn')); ?> </div>
</div>
<?php $this->endWidget(); ?>

<!-- form -->