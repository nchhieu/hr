<?php

/* @var $this NhanvienController */
/* @var $model Nhanvien */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class='row-fluid'>
  <div class="span2"> <?php echo $form->label($model,'nhanvien_id'); ?> <?php echo $form->textField($model,'nhanvien_id',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'bophan_id'); ?> <?php echo $form->textField($model,'bophan_id',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'nhanvien_cmnd'); ?> <?php echo $form->textField($model,'nhanvien_cmnd',array('size'=>16,'maxlength'=>16,'class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'nhanvien_gioitinh'); ?> <?php echo $form->textField($model,'nhanvien_gioitinh',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'nhanvien_hienthi'); ?> <?php echo $form->textField($model,'nhanvien_hienthi',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-primary')); ?> </div>
</div>
<?php $this->endWidget(); ?>

<!-- search-form -->