<?php

/* @var $this BacluongController */
/* @var $model Bacluong */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'bacluong_id'); ?> <?php echo $form->textField($model,'bacluong_id',array('class'=>'form-control')); ?> </div>
<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'bacluong_ma'); ?> <?php echo $form->textField($model,'bacluong_ma',array('size'=>16,'maxlength'=>16,'class'=>'form-control')); ?> </div>
<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'bacluong_sotien'); ?> <?php echo $form->textField($model,'bacluong_sotien',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?> </div>
<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'bacluong_hienthi'); ?> <?php echo $form->textField($model,'bacluong_hienthi',array('size'=>4,'maxlength'=>4,'class'=>'form-control')); ?> </div>
<div class="col-sm-2 col-lg-1"><?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-danger')); ?> </div>
<?php $this->endWidget(); ?>

<!-- search-form -->