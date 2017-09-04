<?php

/* @var $this NhanvienNghiController */
/* @var $model NhanvienNghi */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nhanvien-nghi-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

<p class="note">Thông tin với <span class="required">*</span> là bắt buộc.</p>
<?php if($form->errorSummary($model)){ echo  '<div class="alert alert-error"><a class="close" data-dismiss="alert" href="#">×</a><h4><i class="icon-remove-sign"></i> Lỗi</h4>' . $form->errorSummary($model,'','',array('class'=>'alert alert-error')) . '</div>'; }?>
<fieldset>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_id',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_id',array('size'=>9,'maxlength'=>9,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_id'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nghi_loai',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nghi_loai',array('class'=>'span12')); ?> <?php echo $form->error($model,'nghi_loai'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nghi_ngay_xin_nghi',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nghi_ngay_xin_nghi',array('class'=>'span12')); ?> <?php echo $form->error($model,'nghi_ngay_xin_nghi'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nghi_ngaybatdau',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nghi_ngaybatdau',array('class'=>'span12')); ?> <?php echo $form->error($model,'nghi_ngaybatdau'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nghi_ngaydilamlai',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nghi_ngaydilamlai',array('class'=>'span12')); ?> <?php echo $form->error($model,'nghi_ngaydilamlai'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nghi_phep',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nghi_phep',array('class'=>'span12')); ?> <?php echo $form->error($model,'nghi_phep'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nghi_chedo',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nghi_chedo',array('class'=>'span12')); ?> <?php echo $form->error($model,'nghi_chedo'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nghi_nv_the_viec',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nghi_nv_the_viec',array('size'=>60,'maxlength'=>64,'class'=>'span12')); ?> <?php echo $form->error($model,'nghi_nv_the_viec'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nghi_lydo',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nghi_lydo',array('size'=>60,'maxlength'=>64,'class'=>'span12')); ?> <?php echo $form->error($model,'nghi_lydo'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nghi_so_buoi',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nghi_so_buoi',array('class'=>'span12')); ?> <?php echo $form->error($model,'nghi_so_buoi'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nghi_ngay_them',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nghi_ngay_them',array('class'=>'span12')); ?> <?php echo $form->error($model,'nghi_ngay_them'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nguoidung_id',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nguoidung_id',array('class'=>'span12')); ?> <?php echo $form->error($model,'nguoidung_id'); ?> </div>
    </div>
  </div>
  <div class="row-fluid"> </div>
</fieldset>
<div class="form-actions" style="margin-bottom:0">
  <div class="text-right"> <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm mới' : 'Lưu', array('class'=>'btn btn-large btn-primary')); ?> <?php echo CHtml::resetButton('Nhập lại' , array('class'=>'btn')); ?> </div>
</div>
<?php $this->endWidget(); ?>

<!-- form -->