<?php

/* @var $this NhanvienLuongController */
/* @var $model NhanvienLuong */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class='row-fluid'>
  <div class="span2"> <?php echo $form->label($model,'luong_id'); ?> <?php echo $form->textField($model,'luong_id',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'nhanvien_id'); ?> <?php echo $form->textField($model,'nhanvien_id',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'luong_thang'); ?> <?php echo $form->textField($model,'luong_thang',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'luong_nam'); ?> <?php echo $form->textField($model,'luong_nam',array('class'=>'span12')); ?> </div>  
  <div class="span2"> <?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-primary')); ?> </div>
</div>
<?php $this->endWidget(); ?>

<!-- search-form -->