<?php

/* @var $this NhanvienGhichuController */
/* @var $model NhanvienGhichu */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nhanvien-ghichu-form',
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
    <div class="control-group span3"> <?php echo $form->labelEx($model,'chude_id',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'chude_id',array('class'=>'span12')); ?> <?php echo $form->error($model,'chude_id'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'ghichu_tieude',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'ghichu_tieude',array('size'=>60,'maxlength'=>255,'class'=>'span12')); ?> <?php echo $form->error($model,'ghichu_tieude'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'ghichu_noidung',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textArea($model,'ghichu_noidung',array('rows'=>6, 'cols'=>50)); ?> <?php echo $form->error($model,'ghichu_noidung'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'ghichu_ngay',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'ghichu_ngay',array('class'=>'span12')); ?> <?php echo $form->error($model,'ghichu_ngay'); ?> </div>
    </div>
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