<?php

/* @var $this NhanvienGhichuController */
/* @var $model NhanvienGhichu */
/* @var $form CActiveForm */
?> <?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'ghichu_id'); ?>
 <?php echo $form->textField($model,'ghichu_id',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'nhanvien_id'); ?>
 <?php echo $form->textField($model,'nhanvien_id',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'chude_id'); ?>
 <?php echo $form->textField($model,'chude_id',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'ghichu_tieude'); ?>
 <?php echo $form->textField($model,'ghichu_tieude',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'ghichu_noidung'); ?>
 <?php echo $form->textArea($model,'ghichu_noidung',array('rows'=>6, 'cols'=>50)); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'ghichu_ngay'); ?>
 <?php echo $form->textField($model,'ghichu_ngay',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'admin_id'); ?>
 <?php echo $form->textField($model,'admin_id',array('class'=>'form-control')); ?>
 </div>
    <div class="col-sm-2 col-lg-1"><?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-danger')); ?>
 </div>

<?php $this->endWidget(); ?>
 
<!-- search-form -->