<?php

/* @var $this OrderItemController */
/* @var $model OrderItem */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'order_item_status'); ?> <?php echo $form->dropDownList($model,'order_item_status',array('1'=>'Bước mẫu','2'=>'Bước Chuẩn bị','3'=>'Bước Sản xuất','4'=>'Bước Xuất hàng','5'=>'Hoàn thành'),array('empty'=>'Tất cả','class'=>'form-control')); ?> </div>
<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'customer_id'); ?> <?php echo $form->dropDownList($model,'customer_id',CHtml::listData(Customer::model()->findAll(), 'customer_id', 'customer_code'),array('empty'=>'Tất cả','class'=>'form-control chosen')); ?> </div>
<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'order_code'); ?> <?php echo $form->textField($model,'order_code',array('size'=>32,'maxlength'=>32,'class'=>'form-control')); ?> </div>
<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'brand_name'); ?> <?php echo $form->textField($model,'brand_name',array('size'=>32,'maxlength'=>32,'class'=>'form-control')); ?> </div>
<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'item_code'); ?> <?php echo $form->textField($model,'item_code',array('size'=>32,'maxlength'=>32,'class'=>'form-control')); ?> </div>

<div class="col-sm-2 col-lg-1"><?php echo CHtml::submitButton('Tìm',array('class'=>'btn btn-large btn-danger')); ?> </div>
<?php $this->endWidget(); ?>

<!-- search-form -->