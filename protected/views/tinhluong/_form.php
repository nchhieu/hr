<?php

/* @var $this TinhluongController */
/* @var $model Tinhluong */
/* @var $form CActiveForm */
?> <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tinhluong-form',
	'enableAjaxValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal'),
)); ?>
<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php if($form->errorSummary($model)){ echo   $form->errorSummary($model,'','',array('class'=>'alert alert-danger')); }?>



<fieldset>
<div class="row">
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'nhanvien_luong_id',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'nhanvien_luong_id',array('class'=>'form-control')); ?>
 <?php echo $form->error($model,'nhanvien_luong_id'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'nhanvien_id',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'nhanvien_id',array('class'=>'form-control')); ?>
 <?php echo $form->error($model,'nhanvien_id'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'bacluong_id',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'bacluong_id',array('class'=>'form-control')); ?>
 <?php echo $form->error($model,'bacluong_id'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_thang',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_thang',array('class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_thang'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_nam',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_nam',array('class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_nam'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_congthuc',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_congthuc',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_congthuc'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_ngaycong_thang',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_ngaycong_thang',array('class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_ngaycong_thang'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_ngaycong_thucte',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_ngaycong_thucte',array('class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_ngaycong_thucte'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_nghi_cophpep',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_nghi_cophpep',array('class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_nghi_cophpep'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_nghi_khongphep',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_nghi_khongphep',array('class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_nghi_khongphep'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_ngay_ditre',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_ngay_ditre',array('class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_ngay_ditre'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_coban',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_coban',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_coban'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_coban_thucte',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_coban_thucte',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_coban_thucte'); ?>
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
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_chuyencan_phantram',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_chuyencan_phantram',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_chuyencan_phantram'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_chuyencan',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_chuyencan',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_chuyencan'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_dochai',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_dochai',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_dochai'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_xe',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_xe',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_xe'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_guixe',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_guixe',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_guixe'); ?>
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
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_com_ngay',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_com_ngay',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_com_ngay'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_com_thanhtien',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_com_thanhtien',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_com_thanhtien'); ?>
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
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_doanhso',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_doanhso',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_doanhso'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_ngoaigio_150',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_ngoaigio_150',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_ngoaigio_150'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_ngoaigio_195',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_ngoaigio_195',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_ngoaigio_195'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_ngoaigio_200',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_ngoaigio_200',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_ngoaigio_200'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_ngoaigio_300',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_ngoaigio_300',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_ngoaigio_300'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_ngoaigio_thanhtien',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_ngoaigio_thanhtien',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_ngoaigio_thanhtien'); ?>
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
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_cong_khac',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_cong_khac',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_cong_khac'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_baohiem',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_baohiem',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_baohiem'); ?>
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
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_tru_thunhap',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_tru_thunhap',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_tru_thunhap'); ?>
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
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_tongcong',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_tongcong',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_tongcong'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_thuclanh',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_thuclanh',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_thuclanh'); ?>
</div>
    </div>
	</div>
    </div><div class="row">	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_ghichu',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_ghichu',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_ghichu'); ?>
</div>
    </div>
	</div>
    	<div class="col-md-6">
    <div class="form-group">  <?php echo $form->labelEx($model,'luong_ngaytinh',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
      <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'luong_ngaytinh',array('class'=>'form-control')); ?>
 <?php echo $form->error($model,'luong_ngaytinh'); ?>
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