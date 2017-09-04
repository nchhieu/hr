<?php

/* @var $this NhanvienLylichController */
/* @var $model NhanvienLylich */
/* @var $form CActiveForm */
?> <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nhanvien-lylich-form',
	'enableAjaxValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal'),
)); ?>
<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php if($form->errorSummary($model)){ echo   $form->errorSummary($model,'','',array('class'=>'alert alert-danger')); }?>



<fieldset>
<div class="row">
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'nhanvien_id',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'nhanvien_id',array('class'=>'form-control')); ?>
 <?php echo $form->error($model,'nhanvien_id'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'nhanvien_quoctich',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'nhanvien_quoctich',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'nhanvien_quoctich'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'nhanvien_honnhan',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'nhanvien_honnhan',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'nhanvien_honnhan'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'nhanvien_tamtru',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textArea($model,'nhanvien_tamtru',array('rows'=>6, 'cols'=>50)); ?>
 <?php echo $form->error($model,'nhanvien_tamtru'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'nhanvien_thuongtru',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textArea($model,'nhanvien_thuongtru',array('rows'=>6, 'cols'=>50)); ?>
 <?php echo $form->error($model,'nhanvien_thuongtru'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'nhanvien_lylich',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textArea($model,'nhanvien_lylich',array('rows'=>6, 'cols'=>50)); ?>
 <?php echo $form->error($model,'nhanvien_lylich'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'nhanvien_kinhnghiem',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textArea($model,'nhanvien_kinhnghiem',array('rows'=>6, 'cols'=>50)); ?>
 <?php echo $form->error($model,'nhanvien_kinhnghiem'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'nhanvien_daotao',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textArea($model,'nhanvien_daotao',array('rows'=>6, 'cols'=>50)); ?>
 <?php echo $form->error($model,'nhanvien_daotao'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'admin_id',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'admin_id',array('class'=>'form-control')); ?>
 <?php echo $form->error($model,'admin_id'); ?>
</div>
    </div>
	</div>
    </div>
 <div class="form-group">
    <div class="text-center"> <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', array('class'=>'btn btn-lg btn-danger')); ?>
 <?php echo CHtml::resetButton('Nhập lại' , array('class'=>'btn')); ?>
 </div>
</div>
</fieldset>
<?php $this->endWidget(); ?>
 
<!-- form -->