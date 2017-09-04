<?php

/* @var $this NhanvienLylichController */
/* @var $model NhanvienLylich */
/* @var $form CActiveForm */
?> <?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'nhanvien_lylich_id'); ?>
 <?php echo $form->textField($model,'nhanvien_lylich_id',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'nhanvien_id'); ?>
 <?php echo $form->textField($model,'nhanvien_id',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'nhanvien_quoctich'); ?>
 <?php echo $form->textField($model,'nhanvien_quoctich',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'nhanvien_honnhan'); ?>
 <?php echo $form->textField($model,'nhanvien_honnhan',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'nhanvien_tamtru'); ?>
 <?php echo $form->textArea($model,'nhanvien_tamtru',array('rows'=>6, 'cols'=>50)); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'nhanvien_thuongtru'); ?>
 <?php echo $form->textArea($model,'nhanvien_thuongtru',array('rows'=>6, 'cols'=>50)); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'nhanvien_lylich'); ?>
 <?php echo $form->textArea($model,'nhanvien_lylich',array('rows'=>6, 'cols'=>50)); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'nhanvien_kinhnghiem'); ?>
 <?php echo $form->textArea($model,'nhanvien_kinhnghiem',array('rows'=>6, 'cols'=>50)); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'nhanvien_daotao'); ?>
 <?php echo $form->textArea($model,'nhanvien_daotao',array('rows'=>6, 'cols'=>50)); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'admin_id'); ?>
 <?php echo $form->textField($model,'admin_id',array('class'=>'form-control')); ?>
 </div>
    <div class="col-sm-2 col-lg-1"><?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-danger')); ?>
 </div>

<?php $this->endWidget(); ?>
 
<!-- search-form -->