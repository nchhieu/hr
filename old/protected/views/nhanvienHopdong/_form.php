<?php

/* @var $this NhanvienHopdongController */
/* @var $model NhanvienHopdong */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nhanvien-hopdong-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

<p class="note">Thông tin với <span class="required">*</span> là bắt buộc.</p>
<?php if($form->errorSummary($model)){ echo  '<div class="alert alert-error"><a class="close" data-dismiss="alert" href="#">×</a><h4><i class="icon-remove-sign"></i> Lỗi</h4>' . $form->errorSummary($model,'','',array('class'=>'alert alert-error')) . '</div>'; }?>
<fieldset>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nhanvien_id',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nhanvien_id',array('class'=>'span12')); ?> <?php echo $form->error($model,'nhanvien_id'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'bophan_id',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'bophan_id',array('class'=>'span12')); ?> <?php echo $form->error($model,'bophan_id'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'chucdanh_id',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'chucdanh_id',array('class'=>'span12')); ?> <?php echo $form->error($model,'chucdanh_id'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'hopdong_ma',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'hopdong_ma',array('size'=>15,'maxlength'=>15,'class'=>'span12')); ?> <?php echo $form->error($model,'hopdong_ma'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'hopdong_ngaybatdau',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'hopdong_ngaybatdau',array('class'=>'span12')); ?> <?php echo $form->error($model,'hopdong_ngaybatdau'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'hopdong_ngayketthuc',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'hopdong_ngayketthuc',array('class'=>'span12')); ?> <?php echo $form->error($model,'hopdong_ngayketthuc'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'hopdong_thuviec_tungay',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'hopdong_thuviec_tungay',array('class'=>'span12')); ?> <?php echo $form->error($model,'hopdong_thuviec_tungay'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'hopdong_thuviec_denngay',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'hopdong_thuviec_denngay',array('class'=>'span12')); ?> <?php echo $form->error($model,'hopdong_thuviec_denngay'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'hopdong_thoihan',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'hopdong_thoihan',array('class'=>'span12')); ?> <?php echo $form->error($model,'hopdong_thoihan'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'hopdong_mucluong_canban',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'hopdong_mucluong_canban',array('size'=>9,'maxlength'=>9,'class'=>'span12')); ?> <?php echo $form->error($model,'hopdong_mucluong_canban'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'hopdong_phucap',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'hopdong_phucap',array('size'=>9,'maxlength'=>9,'class'=>'span12')); ?> <?php echo $form->error($model,'hopdong_phucap'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'hopdong_chucdanh',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'hopdong_chucdanh',array('size'=>60,'maxlength'=>255,'class'=>'span12')); ?> <?php echo $form->error($model,'hopdong_chucdanh'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'hopdong_chucdanh_en',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'hopdong_chucdanh_en',array('size'=>60,'maxlength'=>255,'class'=>'span12')); ?> <?php echo $form->error($model,'hopdong_chucdanh_en'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'hopdong_thoigian_lamviec',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'hopdong_thoigian_lamviec',array('size'=>60,'maxlength'=>255,'class'=>'span12')); ?> <?php echo $form->error($model,'hopdong_thoigian_lamviec'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'hopdong_thoigian_lamviec_en',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'hopdong_thoigian_lamviec_en',array('size'=>60,'maxlength'=>255,'class'=>'span12')); ?> <?php echo $form->error($model,'hopdong_thoigian_lamviec_en'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'hopdong_mota_congviec',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'hopdong_mota_congviec',array('size'=>60,'maxlength'=>255,'class'=>'span12')); ?> <?php echo $form->error($model,'hopdong_mota_congviec'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'hopdong_mota_congviec_en',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'hopdong_mota_congviec_en',array('size'=>60,'maxlength'=>255,'class'=>'span12')); ?> <?php echo $form->error($model,'hopdong_mota_congviec_en'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'hopdong_diadiem_lamviec',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'hopdong_diadiem_lamviec',array('size'=>60,'maxlength'=>64,'class'=>'span12')); ?> <?php echo $form->error($model,'hopdong_diadiem_lamviec'); ?> </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="control-group span3"> <?php echo $form->labelEx($model,'hopdong_diadiem_lamviec_en',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'hopdong_diadiem_lamviec_en',array('size'=>60,'maxlength'=>255,'class'=>'span12')); ?> <?php echo $form->error($model,'hopdong_diadiem_lamviec_en'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'hopdong_ngaythem',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'hopdong_ngaythem',array('class'=>'span12')); ?> <?php echo $form->error($model,'hopdong_ngaythem'); ?> </div>
    </div>
    <div class="control-group span3"> <?php echo $form->labelEx($model,'nguoidung_id',array('class'=>'control-label')); ?>
      <div class="controls"> <?php echo $form->textField($model,'nguoidung_id',array('class'=>'span12')); ?> <?php echo $form->error($model,'nguoidung_id'); ?> </div>
    </div>
  </div>
  <div class="row-fluid"> </div>
</fieldset>
<div class="form-actions" style="margin-bottom:0">
  <div class="text-right"> <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm mới' : 'Lưu', array('class'=>'btn btn-large btn-primary')); ?> <?php echo CHtml::resetButton('Nhập lại' , array('class'=>'btn')); ?> </div>
</div>
<?php $this->endWidget(); ?>

<!-- form -->