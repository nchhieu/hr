<?php

/* @var $this PhongbanController */
/* @var $model Phongban */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'bophan_id'); ?> <?php echo $form->dropDownList($model,'phongban_id',CHtml::listData(Bophan::model()->findAll(array('select'=>'bophan_id, bophan_ten','condition'=>'bophan_hienthi="Hien"','order'=>'bophan_ten')), 'bophan_id', 'bophan_ten'),array('empty'=>'Tất cả','class'=>'form-control chosen')); ?></div>
<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'phongban_ten'); ?> <?php echo $form->textField($model,'phongban_ten',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?> </div>
<div class="col-sm-2 col-lg-1"><?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-danger')); ?> </div>
<?php $this->endWidget(); ?>

<!-- search-form -->