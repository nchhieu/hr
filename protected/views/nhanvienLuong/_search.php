<?php

/* @var $this NhanvienLuongController */
/* @var $model NhanvienLuong */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class="col-sm-2 col-lg-1"> <?php echo $form->label($model,'nhanvien_id'); ?> <?php echo $form->textField($model,'nhanvien_id',array('class'=>'form-control')); ?> </div>
<div class="col-sm-4 col-lg-2"> <?php echo $form->label($model,'nhanvien_hoten_search'); ?> <?php echo $form->textField($model,'nhanvien_hoten_search',array('size'=>64,'maxlength'=>64,'class'=>'form-control  show-tooltip','data-placement'=>'top','data-original-title'=>'Nhập không dấu VD: nguyen van a','placeholder'=>'Nhập không dấu VD: nguyen van a')); ?> </div>
<div class="col-sm-2 col-lg-1"> <?php echo $form->label($model,'nhanvien_cmnd'); ?> <?php echo $form->textField($model,'nhanvien_cmnd',array('size'=>16,'maxlength'=>16,'class'=>'form-control')); ?> </div>
<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'bophan_id'); ?> <?php echo $form->dropDownList($model,'bophan_id',CHtml::listData(Bophan::model()->findAll(), 'bophan_id', 'bophan_ten'),array('ajax' => array('type'=>'POST','url'=>CController::createUrl('Phongban/Ajax'),'update'=>'#Nhanvien_phongban_id','data'=>array('bophan_id'=>'js:this.value')),'empty'=>'Tất cả','class'=>'form-control chosen')); ?> </div>
<div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'phongban_id'); ?> <?php echo $form->dropDownList($model,'phongban_id',array(),array('empty'=>'Chọn phòng ban','class'=>'form-control')); ?> </div>
<div class="col-sm-2 col-lg-1"><?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-danger')); ?> </div>
<?php $this->endWidget(); ?>

<!-- search-form -->