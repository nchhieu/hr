<?php

/* @var $this TrinhdoController */
/* @var $model Trinhdo */
/* @var $form CActiveForm */
?> <?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'trinhdo_id'); ?>
 <?php echo $form->textField($model,'trinhdo_id',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'trinhdo_ten'); ?>
 <?php echo $form->textField($model,'trinhdo_ten',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'trinhdo_hienthi'); ?>
 <?php echo $form->textField($model,'trinhdo_hienthi',array('size'=>4,'maxlength'=>4,'class'=>'form-control')); ?>
 </div>
    <div class="col-sm-2 col-lg-1"><?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-danger')); ?>
 </div>

<?php $this->endWidget(); ?>
 
<!-- search-form -->