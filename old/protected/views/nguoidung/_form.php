<?php

/* @var $this NguoidungController */
/* @var $model Nguoidung */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nguoidung-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

<p class="note">Thông tin với <span class="required">*</span> là bắt buộc.</p>
<?php if($form->errorSummary($model)){ echo  '<div class="alert alert-error"><a class="close" data-dismiss="alert" href="#">×</a><h4><i class="icon-remove-sign"></i> Lỗi</h4>' . $form->errorSummary($model,'','',array('class'=>'alert alert-error')) . '</div>'; }?>
<fieldset>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nguoidung_tendangnhap',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nguoidung_tendangnhap',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> <?php echo $form->error($model,'nguoidung_tendangnhap'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nguoidung_matkhau',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nguoidung_matkhau',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> <?php echo $form->error($model,'nguoidung_matkhau'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nguoidung_hoten',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nguoidung_hoten',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> <?php echo $form->error($model,'nguoidung_hoten'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nguoidung_dienthoai',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nguoidung_dienthoai',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> <?php echo $form->error($model,'nguoidung_dienthoai'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nguoidung_nhom',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nguoidung_nhom',array('size'=>0,'maxlength'=>0,'class'=>'span12')); ?> <?php echo $form->error($model,'nguoidung_nhom'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nguoidung_phanquyen',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nguoidung_phanquyen',array('size'=>0,'maxlength'=>0,'class'=>'span12')); ?> <?php echo $form->error($model,'nguoidung_phanquyen'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nguoidung_ghichu',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textArea($model,'nguoidung_ghichu',array('rows'=>6, 'cols'=>50)); ?> <?php echo $form->error($model,'nguoidung_ghichu'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nguoidung_quantri',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nguoidung_quantri',array('size'=>1,'maxlength'=>1,'class'=>'span12')); ?> <?php echo $form->error($model,'nguoidung_quantri'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nguoidung_hienthi',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nguoidung_hienthi',array('class'=>'span12')); ?> <?php echo $form->error($model,'nguoidung_hienthi'); ?> </div>
    </div>
  </div>
  <div class="row-fluid"> </div>
</fieldset>
<div class="form-actions" style="margin-bottom:0">
  <div class="text-right"> <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm mới' : 'Lưu', array('class'=>'btn btn-large btn-primary')); ?> <?php echo CHtml::resetButton('Nhập lại' , array('class'=>'btn')); ?> </div>
</div>
<?php $this->endWidget(); ?>

<!-- form -->