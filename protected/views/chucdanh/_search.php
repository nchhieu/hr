<?php

/* @var $this ChucdanhController */
/* @var $model Chucdanh */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'bophan_id'); ?><?php echo $form->dropDownList($model,'bophan_id',CHtml::listData(Bophan::model()->findAll(array('select'=>'bophan_id, bophan_ten','condition'=>'bophan_hienthi="Hien"','order'=>'bophan_ten')), 'bophan_id', 'bophan_ten'),array('empty'=>'Tất cả','class'=>'form-control')); ?> </div>
<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'chucdanh_ma'); ?> <?php echo $form->textField($model,'chucdanh_ma',array('size'=>16,'maxlength'=>16,'class'=>'form-control')); ?> </div>
<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'chucdanh_ten'); ?> <?php echo $form->textField($model,'chucdanh_ten',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?> </div>
<div class="col-sm-2 col-lg-1"><?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-danger')); ?> </div>
<?php $this->endWidget(); ?>

<!-- search-form -->