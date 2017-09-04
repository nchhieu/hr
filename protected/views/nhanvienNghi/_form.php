<?php

/* @var $this NhanvienNghiController */
/* @var $model NhanvienNghi */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nhanvien-nghi-form',
	'enableAjaxValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal'),
)); ?>

<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php if($form->errorSummary($model)){ echo   $form->errorSummary($model,'','',array('class'=>'alert alert-danger')); }?>
<fieldset>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'nghiviec_tu',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-8 col-lg-9 controls"> 
		
		<div class="input-group "  > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> <?php echo $form->textField($model,'nghiviec_tu',array('class'=>'form-control date-picker show-tooltip','data-placement'=>'top','data-original-title'=>'Nghỉ từ ngày','placeholder'=>'YYYY-MM-DD','data-date-format'=>'yyyy-mm-dd')); ?> </div>
		<?php echo $form->error($model,'nghiviec_tu'); ?> </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'nghiviec_den',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-8 col-lg-9 controls"> <div class="input-group "  > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> <?php echo $form->textField($model,'nghiviec_den',array('class'=>'form-control date-picker show-tooltip','data-placement'=>'top','data-original-title'=>'Nghỉ đến ngày','placeholder'=>'YYYY-MM-DD','data-date-format'=>'yyyy-mm-dd')); ?> <?php echo $form->error($model,'nhanvien_cmnd_ngaycap'); ?></div></div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'nghiviec_loai',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->dropDownList($model,'nghiviec_loai',$model->getTrangthai(), array('class'=>'form-control show-tooltip','data-placement'=>'top','data-original-title'=>'Lý do nghỉ','placeholder'=>'Lý do nghỉ')); ?><?php echo $form->error($model,'nghiviec_loai'); ?> </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'nghiviec_ghichu',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'nghiviec_ghichu',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?> <?php echo $form->error($model,'nghiviec_ghichu'); ?> </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="text-center"> <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', array('class'=>'btn btn-lg btn-danger')); ?> <?php echo CHtml::resetButton('Nhập lại' , array('class'=>'btn')); ?> </div>
  </div>
</fieldset>
<?php $this->endWidget(); ?>

<!-- form -->