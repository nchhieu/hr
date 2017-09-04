<?php

/* @var $this ChucdanhController */
/* @var $model Chucdanh */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class='row-fluid'>
  <div class="span2"> <?php echo $form->label($model,'chucdanh_id'); ?> <?php echo $form->textField($model,'chucdanh_id',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'chucdanh_ma'); ?> <?php echo $form->textField($model,'chucdanh_ma',array('size'=>20,'maxlength'=>20,'class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'chucdanh_ten'); ?> <?php echo $form->textField($model,'chucdanh_ten',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-primary')); ?> </div>
</div>
<?php $this->endWidget(); ?>

<!-- search-form -->