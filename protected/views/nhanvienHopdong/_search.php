<?php

/* @var $this NhanvienHopdongController */
/* @var $model NhanvienHopdong */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'hopdong_ma'); ?> <?php echo $form->textField($model,'hopdong_ma',array('size'=>32,'maxlength'=>32,'class'=>'form-control')); ?> </div>
<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'hopdong_ngaybatdau'); ?> <?php echo $form->textField($model,'hopdong_ngaybatdau',array('class'=>'form-control')); ?> </div>
<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'hopdong_ngayketthuc'); ?> <?php echo $form->textField($model,'hopdong_ngayketthuc',array('class'=>'form-control')); ?> </div>
<div class="col-sm-2 col-lg-1"><?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-danger')); ?> </div>
<?php $this->endWidget(); ?>

<!-- search-form -->