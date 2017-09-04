<?php

/* @var $this NhanvienNghiController */
/* @var $model NhanvienNghi */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'nghiviec_loai'); ?> <?php echo $form->dropDownList($model,'nghiviec_loai',$model->getTrangthai(), array('class'=>'form-control','placeholder'=>'Tất cả')); ?> </div>
<div class="col-sm-2 col-lg-1"><?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-danger')); ?> </div>
<?php $this->endWidget(); ?>

<!-- search-form -->