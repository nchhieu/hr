<?php

/* @var $this NhanvienController */
/* @var $model Nhanvien */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nhanvien-form',
	'enableAjaxValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal','enctype'=>'multipart/form-data'),
)); ?>

<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php if($form->errorSummary($model)){ echo   $form->errorSummary($model,'','',array('class'=>'alert alert-danger')); }?>
<fieldset>
  <div class="row">
  <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'nhanvien_ngayvao',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-8 col-lg-9 controls">
          <div class="input-group "  > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> <?php echo $form->textField($model,'nhanvien_ngayvao',array('class'=>'form-control date-picker show-tooltip','data-placement'=>'top','data-original-title'=>'Ngày vào làm việc','placeholder'=>'YYYY-MM-DD','data-date-format'=>'yyyy-mm-dd')); ?> </div>
          <?php echo $form->error($model,'nhanvien_ngayvao'); ?> </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'nhanvien_ho',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-4 col-lg-5 controls"> <?php echo $form->textField($model,'nhanvien_ho',array('size'=>60,'maxlength'=>255,'class'=>'form-control show-tooltip','data-placement'=>'top','data-original-title'=>'Họ & tên lót','placeholder'=>'Họ & tên lót')); ?> <?php echo $form->error($model,'nhanvien_ho'); ?> </div>
        <div class="col-sm-4 col-lg-4 controls"> <?php echo $form->textField($model,'nhanvien_ten',array('size'=>60,'maxlength'=>255,'class'=>'form-control show-tooltip','data-placement'=>'top','data-original-title'=>'Tên','placeholder'=>'Tên')); ?> <?php echo $form->error($model,'nhanvien_ten'); ?> </div>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'phongban_id',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-8 col-lg-5 controls"> <?php echo $form->dropDownList($model,'phongban_id',CHtml::listData(Phongban::model()->findAll(), 'phongban_id', 'phongban_ten','bophan.bophan_ten'),array('ajax' => array('type'=>'POST','url'=>CController::createUrl('Chucdanh/Ajax'),'update'=>'#Nhanvien_chucdanh_id','data'=>array('phongban_id'=>'js:this.value')),'empty'=>'Chọn phòng ban','class'=>'form-control chosen')); ?> <?php echo $form->error($model,'bophan_id'); ?> </div>
        <div class="col-sm-4 col-lg-4 controls"> <?php echo $form->dropDownList($model,'chucdanh_id',CHtml::listData($Chucdanh,'chucdanh_id','chucdanh_ten'),array('empty'=>'Chọn chức danh','class'=>'form-control')); ?> <?php echo $form->error($model,'chucdanh_id'); ?> </div>
      </div>
    </div>
     <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'trinhdo_id',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-8 col-lg-5 controls"> <?php echo $form->dropDownList($model,'trinhdo_id',CHtml::listData(Trinhdo::model()->findAll(), 'trinhdo_id', 'trinhdo_ten'),array('empty'=>'Trình độ','class'=>'form-control show-tooltip chosen','data-placement'=>'top','data-original-title'=>'Trình độ')); ?> <?php echo $form->error($model,'trinhdo_id'); ?> </div>
        <div class="col-sm-4 col-lg-4 controls"> </div>
      </div>
    </div>
  </div>
  <div class="row">
   
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'nhanvien_ma',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'nhanvien_ma',array('size'=>16,'maxlength'=>16,'class'=>'form-control show-tooltip','data-placement'=>'top','data-original-title'=>'Mã nhân viên','placeholder'=>'Mã nhân viên')); ?> <?php echo $form->error($model,'nhanvien_ma'); ?> </div>
      </div>
    </div>
     <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'nhanvien_mst',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textField($model,'nhanvien_mst',array('size'=>16,'maxlength'=>16,'class'=>'form-control show-tooltip','data-placement'=>'top','data-original-title'=>'Mã số thuế','placeholder'=>'Mã số thuế')); ?> <?php echo $form->error($model,'nhanvien_ma'); ?> </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'nhanvien_cmnd',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-3 col-lg-3 controls"> <?php echo $form->textField($model,'nhanvien_cmnd',array('size'=>16,'maxlength'=>16,'class'=>'form-control show-tooltip','data-placement'=>'top','data-original-title'=>'Số CMND',)); ?> <?php echo $form->error($model,'nhanvien_cmnd'); ?> </div>
        <div class="col-sm-3 col-lg-3 controls">
          <div class="input-group "  > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> <?php echo $form->textField($model,'nhanvien_cmnd_ngaycap',array('class'=>'form-control date-picker show-tooltip','data-placement'=>'top','data-original-title'=>'Ngày cấp','placeholder'=>'YYYY-MM-DD','data-date-format'=>'yyyy-mm-dd')); ?> <?php echo $form->error($model,'nhanvien_cmnd_ngaycap'); ?></div>
          <?php echo $form->error($model,'nhanvien_cmnd_ngaycap'); ?> </div>
        <div class="col-sm-2 col-lg-3">
		<?php echo $form->dropDownList($model,'nhanvien_cmnd_noicap',CHtml::listData(Thanhpho::model()->findAll(), 'thanhpho_id', 'thanhpho_ten'),array('empty'=>'Nơi cấp','class'=>'form-control chosen show-tooltip','data-placement'=>'top','data-original-title'=>'Nơi cấp')); ?> 
		
	<?php echo $form->error($model,'nhanvien_cmnd_noicap'); ?></div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'nhanvien_ngaysinh',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-3 col-lg-3 controls">
          <div class="input-group "  > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> <?php echo $form->textField($model,'nhanvien_ngaysinh',array('class'=>'form-control date-picker show-tooltip','data-placement'=>'top','data-original-title'=>'Ngày sinh','placeholder'=>'YYYY-MM-DD','data-date-format'=>'yyyy-mm-dd')); ?> </div>
          <?php echo $form->error($model,'nhanvien_ngaysinh'); ?> </div>
        <div class="col-sm-4 col-lg-4 controls"> <?php echo $form->dropDownList($model,'nhanvien_noisinh',CHtml::listData(Thanhpho::model()->findAll(), 'thanhpho_id', 'thanhpho_ten'),array('empty'=>'Nơi sinh','class'=>'form-control chosen show-tooltip','data-placement'=>'top','data-original-title'=>'Nơi sinh')); ?> 
		
	<?php echo $form->error($model,'nhanvien_noisinh'); ?> </div>
        
        
        <div class="col-sm-2 col-lg-2 controls"> <?php echo $form->dropDownList($model,'nhanvien_gioitinh',array('Nam'=>'Nam','Nu'=>'Nữ'), array('class'=>'form-control','empty'=>'Nam/nữ')); ?> <?php echo $form->error($model,'nhanvien_gioitinh'); ?> </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'nhanvien_dienthoai',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-4 col-lg-5 controls"> <?php echo $form->textField($model,'nhanvien_dienthoai',array('size'=>32,'maxlength'=>32,'class'=>'form-control show-tooltip','data-placement'=>'top','data-original-title'=>'Điện thoại','placeholder'=>'Điện thoại')); ?> <?php echo $form->error($model,'nhanvien_dienthoai'); ?> </div>
        <div class="col-sm-4 col-lg-4 controls"> <?php echo $form->textField($model,'nhanvien_dienthoai_nhonhan',array('size'=>32,'maxlength'=>32,'class'=>'form-control show-tooltip','data-placement'=>'top','data-original-title'=>'Điện thoại nhà/nhờ nhắn','placeholder'=>'Điện thoại 2')); ?> <?php echo $form->error($model,'nhanvien_dienthoai_nhonhan'); ?> </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'nhanvien_nganhang',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-4 col-lg-5 controls"> <?php echo $form->textField($model,'nhanvien_nganhang',array('size'=>32,'maxlength'=>32,'class'=>'form-control show-tooltip','data-placement'=>'top','data-original-title'=>'Tài khoản ngân hàng','placeholder'=>'Ngân hàng')); ?> <?php echo $form->error($model,'nhanvien_nganhang'); ?> </div>
        <div class="col-sm-4 col-lg-4 controls"> <?php echo $form->textField($model,'nhanvien_sotaikhoan',array('size'=>32,'maxlength'=>32,'class'=>'form-control show-tooltip','data-placement'=>'top','data-original-title'=>'Số tài khoản ngân hàng','placeholder'=>'Số tài khoản')); ?> <?php echo $form->error($model,'nhanvien_sotaikhoan'); ?> </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'nhanvien_thoigianthu',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-4 col-lg-5 controls">
          <div class="input-group "  > <?php echo $form->textField($model,'nhanvien_thoigianthu',array('size'=>60,'maxlength'=>255,'class'=>'form-control show-tooltip','data-placement'=>'top','data-original-title'=>'Thời gian thử việc','placeholder'=>'Thời gian thứ việc')); ?> <?php echo $form->error($model,'nhanvien_thoigianthu'); ?> <span class="input-group-addon">ngày</span></div>
        </div>
        <div class="col-sm-4 col-lg-4 controls">
          <div class="input-group "  ><?php echo $form->textField($model,'nhanvien_phepnam',array('size'=>60,'maxlength'=>255,'class'=>'form-control show-tooltip','data-placement'=>'top','data-original-title'=>'Phép năm','placeholder'=>'Phép năm')); ?> <span class="input-group-addon">ngày</span></div>
          <?php echo $form->error($model,'nhanvien_phepnam'); ?> </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'nhanvien_ngayky_hdld',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-4 col-lg-5 controls">
          <div class="input-group "  > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> <?php echo $form->textField($model,'nhanvien_ngayky_hdld',array('class'=>'form-control date-picker show-tooltip','data-placement'=>'top','data-original-title'=>'Ngày ký hợp đồng lao động','placeholder'=>'YYYY-MM-DD','data-date-format'=>'yyyy-mm-dd','placeholder'=>'Ngày ký HĐLĐ')); ?> </div>
          <?php echo $form->error($model,'nhanvien_ngayky_hdld'); ?> </div>
        <div class="col-sm-4 col-lg-4 controls">
          <div class="input-group "  > <span class="input-group-addon"><i class="fa fa-calendar"></i></span> <?php echo $form->textField($model,'nhanvien_ngaydangky_baohiem',array('class'=>'form-control date-picker show-tooltip','data-placement'=>'top','data-original-title'=>'Ngày đóng BHXH','placeholder'=>'YYYY-MM-DD','data-date-format'=>'yyyy-mm-dd','placeholder'=>'Ngày đóng BHXH')); ?> </div>
          <?php echo $form->error($model,'nhanvien_ngaydangky_baohiem'); ?> </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'nhanvien_hinhanh',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-4 col-lg-5 controls">
          <div class="fileupload fileupload-new" data-provides="fileupload">
            <div class="input-group">
              <div class="form-control uneditable-input"> <i class="fa fa-file fileupload-exists"></i> <span class="fileupload-preview"></span> </div>
              <div class="input-group-btn"> <a class="btn bun-default btn-file"> <span class="fileupload-new">Select file</span> <span class="fileupload-exists">Change</span> <?php echo $form->fileField($model,'nhanvien_hinhanh',array('class'=>'file-input show-tooltip show-tooltip','data-placement'=>'top','data-original-title'=>'Hình nhân viên','data-original-title'=>'.jpp, gif, png; 360px x 360px ;< 200Kb','data-placement'=>'top')); ?> </a> <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a> </div>
            </div>
            <?php echo $form->error($model,'nhanvien_hinhanh'); ?> </div>
        </div>
        <div class="col-sm-4 col-lg-4 controls"> <?php echo $form->dropDownList($model,'nhanvien_trangthai',$model->getTrangthai(), array('class'=>'form-control','placeholder'=>'Chọn trạng thái làm việc')); ?> <?php echo $form->error($model,'nhanvien_trangthai'); ?> </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group"> <?php echo $form->labelEx($model,'nhanvien_ghichu',array('class'=>'col-sm-4 col-lg-3 control-label')); ?>
        <div class="col-sm-8 col-lg-9 controls"> <?php echo $form->textArea($model,'nhanvien_ghichu',array('rows'=>2, 'class'=>'form-control show-tooltip','data-placement'=>'top','data-original-title'=>'Ghi chú nhân viên')); ?> <?php echo $form->error($model,'nhanvien_ghichu'); ?> </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="text-center"> <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', array('class'=>'btn btn-lg btn-danger')); ?> <?php echo CHtml::resetButton('Nhập lại' , array('class'=>'btn')); ?> </div>
  </div>
</fieldset>
<?php $this->endWidget(); ?>

<!-- form -->