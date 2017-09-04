<?php

/* @var $this BacluongController */
/* @var $model Bacluong */
/* @var $form CActiveForm */
?> <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bacluong-form',
	'enableAjaxValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal'),
)); ?>
<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php if($form->errorSummary($model)){ echo   $form->errorSummary($model,'','',array('class'=>'alert alert-danger')); }?>



<fieldset>
<div class="row">
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'bacluong_ma',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'bacluong_ma',array('size'=>16,'maxlength'=>16,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'bacluong_ma'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'bacluong_sotien',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'bacluong_sotien',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'bacluong_sotien'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'bacluong_ghichu',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'bacluong_ghichu',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'bacluong_ghichu'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'bacluong_hienthi',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'bacluong_hienthi',array('size'=>4,'maxlength'=>4,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'bacluong_hienthi'); ?>
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