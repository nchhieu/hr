<?php

/* @var $this BacluongController */
/* @var $model Bacluong */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class='row-fluid'>
  <div class="span2"> <?php echo $form->label($model,'bacluong_id'); ?> <?php echo $form->textField($model,'bacluong_id',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'bacluong_ma'); ?> <?php echo $form->textField($model,'bacluong_ma',array('size'=>20,'maxlength'=>20,'class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'bacluong_sotien'); ?> <?php echo $form->textField($model,'bacluong_sotien',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-primary')); ?> </div>
</div>
<?php $this->endWidget(); ?>

<!-- search-form -->