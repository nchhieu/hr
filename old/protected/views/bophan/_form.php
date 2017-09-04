<?php

/* @var $this BophanController */
/* @var $model Bophan */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bophan-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

<p class="note">Thông tin với <span class="required">*</span> là bắt buộc.</p>
<?php if($form->errorSummary($model)){ echo  '<div class="alert alert-error"><a class="close" data-dismiss="alert" href="#">×</a><h4><i class="icon-remove-sign"></i> Lỗi</h4>' . $form->errorSummary($model,'','',array('class'=>'alert alert-error')) . '</div>'; }?>
<fieldset>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'bophan_ma',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'bophan_ma',array('size'=>20,'maxlength'=>20,'class'=>'span12')); ?> <?php echo $form->error($model,'bophan_ma'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'bophan_ten',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'bophan_ten',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> <?php echo $form->error($model,'bophan_ten'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'bophan_batdau',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'bophan_batdau',array('class'=>'span12')); ?> <?php echo $form->error($model,'bophan_batdau'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'bophan_gionghi',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'bophan_gionghi',array('class'=>'span12')); ?> <?php echo $form->error($model,'bophan_gionghi'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'bophan_ngaylamviec',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'bophan_ngaylamviec',array('size'=>32,'maxlength'=>32,'class'=>'span12')); ?> <?php echo $form->error($model,'bophan_ngaylamviec'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'bophan_ghichu',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textArea($model,'bophan_ghichu',array('rows'=>6, 'cols'=>50)); ?> <?php echo $form->error($model,'bophan_ghichu'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'bophan_hienthi',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'bophan_hienthi',array('class'=>'span12')); ?> <?php echo $form->error($model,'bophan_hienthi'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_id',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_id',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_id'); ?> </div>
    </div>
  </div>
</fieldset>
<div class="form-actions" style="margin-bottom:0">
  <div class="text-right"> <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm mới' : 'Lưu', array('class'=>'btn btn-large btn-primary')); ?> <?php echo CHtml::resetButton('Nhập lại' , array('class'=>'btn')); ?> </div>
</div>
<?php $this->endWidget(); ?>

<!-- form -->