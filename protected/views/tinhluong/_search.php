<?php

/* @var $this TinhluongController */
/* @var $model Tinhluong */
/* @var $form CActiveForm */
?> <?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_id'); ?>
 <?php echo $form->textField($model,'luong_id',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'nhanvien_luong_id'); ?>
 <?php echo $form->textField($model,'nhanvien_luong_id',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'nhanvien_id'); ?>
 <?php echo $form->textField($model,'nhanvien_id',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'bacluong_id'); ?>
 <?php echo $form->textField($model,'bacluong_id',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_thang'); ?>
 <?php echo $form->textField($model,'luong_thang',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_nam'); ?>
 <?php echo $form->textField($model,'luong_nam',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_congthuc'); ?>
 <?php echo $form->textField($model,'luong_congthuc',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_ngaycong_thang'); ?>
 <?php echo $form->textField($model,'luong_ngaycong_thang',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_ngaycong_thucte'); ?>
 <?php echo $form->textField($model,'luong_ngaycong_thucte',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_nghi_cophpep'); ?>
 <?php echo $form->textField($model,'luong_nghi_cophpep',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_nghi_khongphep'); ?>
 <?php echo $form->textField($model,'luong_nghi_khongphep',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_ngay_ditre'); ?>
 <?php echo $form->textField($model,'luong_ngay_ditre',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_coban'); ?>
 <?php echo $form->textField($model,'luong_coban',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_coban_thucte'); ?>
 <?php echo $form->textField($model,'luong_coban_thucte',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_trachnhiem'); ?>
 <?php echo $form->textField($model,'luong_trachnhiem',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_chuyencan_phantram'); ?>
 <?php echo $form->textField($model,'luong_chuyencan_phantram',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_chuyencan'); ?>
 <?php echo $form->textField($model,'luong_chuyencan',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_dochai'); ?>
 <?php echo $form->textField($model,'luong_dochai',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_xe'); ?>
 <?php echo $form->textField($model,'luong_xe',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_guixe'); ?>
 <?php echo $form->textField($model,'luong_guixe',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_dienthoai'); ?>
 <?php echo $form->textField($model,'luong_dienthoai',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_thuenha'); ?>
 <?php echo $form->textField($model,'luong_thuenha',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_com_ngay'); ?>
 <?php echo $form->textField($model,'luong_com_ngay',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_com_thanhtien'); ?>
 <?php echo $form->textField($model,'luong_com_thanhtien',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_taynghe'); ?>
 <?php echo $form->textField($model,'luong_taynghe',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_doanhso'); ?>
 <?php echo $form->textField($model,'luong_doanhso',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_ngoaigio_150'); ?>
 <?php echo $form->textField($model,'luong_ngoaigio_150',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_ngoaigio_195'); ?>
 <?php echo $form->textField($model,'luong_ngoaigio_195',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_ngoaigio_200'); ?>
 <?php echo $form->textField($model,'luong_ngoaigio_200',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_ngoaigio_300'); ?>
 <?php echo $form->textField($model,'luong_ngoaigio_300',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_ngoaigio_thanhtien'); ?>
 <?php echo $form->textField($model,'luong_ngoaigio_thanhtien',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_thamnien'); ?>
 <?php echo $form->textField($model,'luong_thamnien',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_cong_khac'); ?>
 <?php echo $form->textField($model,'luong_cong_khac',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_baohiem'); ?>
 <?php echo $form->textField($model,'luong_baohiem',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_tru_doanphi'); ?>
 <?php echo $form->textField($model,'luong_tru_doanphi',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_tru_thunhap'); ?>
 <?php echo $form->textField($model,'luong_tru_thunhap',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_tru_khac'); ?>
 <?php echo $form->textField($model,'luong_tru_khac',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_tongcong'); ?>
 <?php echo $form->textField($model,'luong_tongcong',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_thuclanh'); ?>
 <?php echo $form->textField($model,'luong_thuclanh',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_ghichu'); ?>
 <?php echo $form->textField($model,'luong_ghichu',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'luong_ngaytinh'); ?>
 <?php echo $form->textField($model,'luong_ngaytinh',array('class'=>'form-control')); ?>
 </div>
      <div class="col-sm-2 col-lg-2"> <?php echo $form->label($model,'admin_id'); ?>
 <?php echo $form->textField($model,'admin_id',array('class'=>'form-control')); ?>
 </div>
    <div class="col-sm-2 col-lg-1"><?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-large btn-danger')); ?>
 </div>

<?php $this->endWidget(); ?>
 
<!-- search-form -->