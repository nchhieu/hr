<?php

/* @var $this NhanvienLuongController */
/* @var $model NhanvienLuong */
/* @var $form CActiveForm */
?> <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nhanvien-luong-form',
	'enableAjaxValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal'),
)); ?>
<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php if($form->errorSummary($model)){ echo   $form->errorSummary($model,'','',array('class'=>'alert alert-danger')); }?>



<fieldset>
<div class="row">
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'nhanvien_id',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'nhanvien_id',array('class'=>'form-control')); ?>
 <?php echo $form->error($model,'nhanvien_id'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'bacluong_id',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'bacluong_id',array('class'=>'form-control')); ?>
 <?php echo $form->error($model,'bacluong_id'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_coban',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_coban',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_coban'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_trachnhiem',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_trachnhiem',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_trachnhiem'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_chuyencan',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_chuyencan',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_chuyencan'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_dochai',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_dochai',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_dochai'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_xe',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_xe',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_xe'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_dienthoai',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_dienthoai',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_dienthoai'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_thuenha',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_thuenha',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_thuenha'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_com_thang',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_com_thang',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_com_thang'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_com_ngay',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_com_ngay',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_com_ngay'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_taynghe',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_taynghe',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_taynghe'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_thamnien',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_thamnien',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_thamnien'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_doanhso',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_doanhso',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_doanhso'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_cong_khac',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_cong_khac',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_cong_khac'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_tru_khac',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_tru_khac',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_tru_khac'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_tru_baohiem',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_tru_baohiem',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_tru_baohiem'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_tru_doanphi',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_tru_doanphi',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_tru_doanphi'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_giamtru_giacanh',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_giamtru_giacanh',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_giamtru_giacanh'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_ngaylamviec',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_ngaylamviec',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_ngaylamviec'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_trangthai',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_trangthai',array('size'=>4,'maxlength'=>4,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_trangthai'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_ngaythem',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_ngaythem',array('class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_ngaythem'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'admin_id',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'admin_id',array('class'=>'form-control')); ?>
 <?php echo $form->error($model,'admin_id'); ?>
</div>
    </div>
	</div>
    </div>
 <div class="form-group">
    <div class="text-center"> <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', array('class'=>'btn btn-lg btn-danger')); ?>
 <?php echo CHtml::resetButton('Nhập lại' , array('class'=>'btn')); ?>
 </div>
</div>
</fieldset>
<?php $this->endWidget(); ?>
 
<!-- form -->