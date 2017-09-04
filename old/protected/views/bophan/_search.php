<?php

/* @var $this BophanController */
/* @var $model Bophan */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class='row-fluid'>
  <div class="span2"> <?php echo $form->label($model,'bophan_id'); ?> <?php echo $form->textField($model,'bophan_id',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'bophan_ma'); ?> <?php echo $form->textField($model,'bophan_ma',array('size'=>20,'maxlength'=>20,'class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'bophan_ten'); ?> <?php echo $form->textField($model,'bophan_ten',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'bophan_hienthi'); ?> <?php echo $form->textField($model,'bophan_hienthi',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'nhanvien_id'); ?> <?php echo $form->textField($model,'nhanvien_id',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-primary')); ?> </div>
</div>
<?php $this->endWidget(); ?>

<!-- search-form -->