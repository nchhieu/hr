<?php

/* @var $this NguoidungController */
/* @var $model Nguoidung */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class='row-fluid'>
  <div class="span2"> <?php echo $form->label($model,'nguoidung_id'); ?> <?php echo $form->textField($model,'nguoidung_id',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'nguoidung_tendangnhap'); ?> <?php echo $form->textField($model,'nguoidung_tendangnhap',array('size'=>50,'maxlength'=>50,'class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'nguoidung_quantri'); ?> <?php echo $form->textField($model,'nguoidung_quantri',array('size'=>1,'maxlength'=>1,'class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-primary')); ?> </div>
</div>
<?php $this->endWidget(); ?>

<!-- search-form -->