<?php

/* @var $this NhanvienGhichuController */
/* @var $model NhanvienGhichu */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class='row-fluid'>
  <div class="span2"> <?php echo $form->label($model,'ghichu_id'); ?> <?php echo $form->textField($model,'ghichu_id',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'nhanvien_id'); ?> <?php echo $form->textField($model,'nhanvien_id',array('size'=>9,'maxlength'=>9,'class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'chude_id'); ?> <?php echo $form->textField($model,'chude_id',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-primary')); ?> </div>
</div>
<?php $this->endWidget(); ?>

<!-- search-form -->