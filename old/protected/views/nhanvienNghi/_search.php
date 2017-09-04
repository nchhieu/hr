<?php

/* @var $this NhanvienNghiController */
/* @var $model NhanvienNghi */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class='row-fluid'>
  <div class="span2"> <?php echo $form->label($model,'nhanvien_id'); ?> <?php echo $form->textField($model,'nhanvien_id',array('size'=>9,'maxlength'=>9,'class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'nghi_loai'); ?> <?php echo $form->textField($model,'nghi_loai',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'nghi_ngaybatdau'); ?> <?php echo $form->textField($model,'nghi_ngaybatdau',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'nghi_phep'); ?> <?php echo $form->textField($model,'nghi_phep',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'nghi_chedo'); ?> <?php echo $form->textField($model,'nghi_chedo',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-primary')); ?> </div>
</div>
<?php $this->endWidget(); ?>

<!-- search-form -->