<?php

/* @var $this CauhinhController */
/* @var $model Cauhinh */
/* @var $form CActiveForm */
?> <?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'cauhinh_key'); ?>
 <?php echo $form->textField($model,'cauhinh_key',array('size'=>60,'maxlength'=>64,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'cauhinh_giatri'); ?>
 <?php echo $form->textField($model,'cauhinh_giatri',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'cauhinh_mota'); ?>
 <?php echo $form->textField($model,'cauhinh_mota',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
 </div>
    <div class="col-sm-2 col-lg-1"><?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-danger')); ?>
 </div>

<?php $this->endWidget(); ?>
 
<!-- search-form -->