<?php

/* @var $this PhongbanController */
/* @var $model Phongban */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'phongban-form',
	'enableAjaxValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal'),
)); ?>

<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php if($form->errorSummary($model)){ echo   $form->errorSummary($model,'','',array('class'=>'alert alert-danger')); }?>
<fieldset>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'bophan_id',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->dropDownList($model,'bophan_id',CHtml::listData(Bophan::model()->findAll(array('select'=>'bophan_id, bophan_ten','condition'=>'bophan_hienthi="Hien"','order'=>'bophan_ten')), 'bophan_id', 'bophan_ten'),array('empty'=>'Chọn bộ phận','class'=>'form-control chosen')); ?> <?php echo $form->error($model,'bophan_id'); ?> </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'phongban_ten',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'phongban_ten',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?> <?php echo $form->error($model,'phongban_ten'); ?> </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'phongban_trangthai',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->dropDownList($model,'phongban_trangthai',array('Hien'=>'Hiện','An'=>'Ẩn'), array('class'=>'form-control')); ?><?php echo $form->error($model,'phongban_trangthai'); ?> </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="text-center"> <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', array('class'=>'btn btn-lg btn-danger')); ?> <?php echo CHtml::resetButton('Nhập lại' , array('class'=>'btn')); ?> </div>
  </div>
</fieldset>
<?php $this->endWidget(); ?>

<!-- form -->