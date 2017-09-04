<?php

/* @var $this NhanvienHopdongController */
/* @var $model NhanvienHopdong */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class='row-fluid'>
  <div class="span2"> <?php echo $form->label($model,'hopdong_id'); ?> <?php echo $form->textField($model,'hopdong_id',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'nhanvien_id'); ?> <?php echo $form->textField($model,'nhanvien_id',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'bophan_id'); ?> <?php echo $form->textField($model,'bophan_id',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'hopdong_ma'); ?> <?php echo $form->textField($model,'hopdong_ma',array('size'=>15,'maxlength'=>15,'class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'hopdong_ngaybatdau'); ?> <?php echo $form->textField($model,'hopdong_ngaybatdau',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo $form->label($model,'hopdong_ngayketthuc'); ?> <?php echo $form->textField($model,'hopdong_ngayketthuc',array('class'=>'span12')); ?> </div>
</div>
<div class='row-fluid'>
  <div class="span2"> <?php echo $form->label($model,'hopdong_thoihan'); ?> <?php echo $form->textField($model,'hopdong_thoihan',array('class'=>'span12')); ?> </div>
  <div class="span2"> <?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-primary')); ?> </div>
</div>
<?php $this->endWidget(); ?>

<!-- search-form -->