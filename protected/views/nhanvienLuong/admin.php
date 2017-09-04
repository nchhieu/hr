<?php

/* @var $this NhanvienLuongController */
/* @var $model NhanvienLuong */
$this->breadcrumbs=array(
	'Nhanvien Luongs'=>array('admin'),
	'Danh sách',
);
Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('nhanvien-luong-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="page-title">
      <div>
        <h1><i class="fa fa-edit"></i> Quản lý Nhanvien Luongs</h1>
      </div>
    </div>
    <!-- END Page Title --> 

	<!-- BEGIN Breadcrumb -->
	<?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,));?>
 
	<!-- END Breadcrumb -->
	
	
	
  <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-title">
            <h3><i class="fa  fa-search"></i> Tìm kiếm </h3>
            <div class="box-tool"> <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a> <a data-action="close" href="#"><i class="fa fa-times"></i></a> </div>
          </div>
          <div class="box-content search-form">
            <div class="row form">
			<?php $this->renderPartial('_search',array(
						'model'=>$model,
					)); ?>
 
			
			</div>
            <div class="clearfix"></div>
            <div class="btn-toolbar pull-right">
              <div class="btn-group"> <?php echo CHtml::link('<i class="fa fa-plus"></i> ',array('NhanvienLuong/create'),array('class'=>'btn btn-circle btn-danger show-tooltip')); ?> <?php echo CHtml::link('<i class="fa fa-repeat"></i> ',array('NhanvienLuong/admin'),array('class'=>'btn btn-circle btn-danger show-tooltip')); ?></div>

            </div>
            <br>
            <br>
            <div class="table-responsive ">
            
			<?php 
			
			
			 
			$dataProvider = $model->searchluong();
			//var_dump($dataProvider);
			$dataProvider->getPagination()->setPageSize( Yii::app()->params['pageSize'] );
			$this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'nhanvien-luong-grid',
            'itemsCssClass'=>'table table-hover  table-condensed',
            'dataProvider'=>$dataProvider,
            'columns'=>array(
            		array(
			'name' => 'nhanvien_id',
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:30px')
		),
		
			array(
				'name' => 'nhanvien',
				'header' => 'Nhân viên',
				'value' => array($this, 'customColumnCGridView'),
				'type' => 'raw',
				'htmlOptions'=>array('style'=>'width:120px')
			),		
		
		array(
			'name' => 'luong_tien_baohiem',
			'header' => 'L.BHXH',
			'headerHtmlOptions'=>array('class'=>'show-tooltip','data-placement'=>'top','data-original-title'=>'Tiền lương khai báo BHXH'),
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:80px','class'=>'text-right')
		),
		array(
			'name' => 'luong_coban',
			'header' => 'Cơ bản',
			'headerHtmlOptions'=>array('class'=>'show-tooltip','data-placement'=>'top','data-original-title'=>'Tiền lương cơ bản'),
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:70px','class'=>'text-right')
		),
		array(
			'name' => 'luong_chuyencan',
			'header' => 'C.cần',
			'headerHtmlOptions'=>array('class'=>'show-tooltip','data-placement'=>'top','data-original-title'=>'Bộ phận tính tiền C.cần bằng số tiền cụ thể, trường hợp này cột % C.cần sẽ bằng 0'),
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:70px','class'=>'text-right')
		),
		array(
			'name' => 'luong_pt_chuyencan',
			'header' => '% C.cần',
			'headerHtmlOptions'=>array('class'=>'show-tooltip','data-placement'=>'top','data-original-title'=>'Bộ phận tính tiền C.cần bằng % lương cơ bản. Trường hợp này cột C.cần sẽ bằng 0'),
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:60px','class'=>'text-right')
		),
		array(
			'name' => 'luong_trachnhiem',
			'header' => 'T.nhiệm',
			'headerHtmlOptions'=>array('class'=>'show-tooltip','data-placement'=>'top','data-original-title'=>'Tiền trách nhiệm'),
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:70px','class'=>'text-right')
		),
		array(
			'name' => 'luong_xe',
			'header' => 'Xăng xe',
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:70px','class'=>'text-right')
		),
		array(
			'name' => 'luong_dienthoai',
			'header' => 'Đ.thoại',
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:70px','class'=>'text-right')
		),
		array(
			'name' => 'luong_cong_khac',
			'header' => '+ khác',
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:70px','class'=>'text-right')
		),
		array(
			'name' => 'luong_com_ngay',
			'header' => 'Ngày Cơm',
			'headerHtmlOptions'=>array('class'=>'show-tooltip','data-placement'=>'top','data-original-title'=>'Tiền cơm cho 1 ngày làm việc'),
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:70px','class'=>'text-right')
		),
		
		array(
			'name' => 'luong_phuthuoc_giacanh',
			'header' => 'Phụ thuộc',
			'headerHtmlOptions'=>array('class'=>'show-tooltip','data-placement'=>'top','data-original-title'=>'Số người phụ thuộc giảm trừ gia cảnh'),
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:70px','class'=>'text-right')
		),
		array(
			'name' => 'luong_tru_khac',
			'header' => '- khác',
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:70px','class'=>'text-right')
		),
		
		
		array(
			'name' => 'luong_tru_doanphi',
			'header' => '- đoàn phí',
			'headerHtmlOptions'=>array('class'=>'show-tooltip','data-placement'=>'top','data-original-title'=>'Khoản trừ phí công đoàn người lao động phải đóng.'),
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:70px','class'=>'text-right')
		),
		
		array(
			'name' => 'luong_ngaynghi_chophep',
			'header' => 'N.nghỉ',
			'headerHtmlOptions'=>array('class'=>'show-tooltip','data-placement'=>'top','data-original-title'=>'Số ngày nghỉ trong tháng cho phép không bị trừ % T.Nhiệm, C.Cần, Xe, Đ.Thoại'),
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:40px','class'=>'text-right')
		),
		
		array(
			'name' => 'luong_ditre_chophep',
			'header' => 'Đi trễ',
			'headerHtmlOptions'=>array('class'=>'show-tooltip','data-placement'=>'top','data-original-title'=>'Số lần đi trễ trong tháng cho phép không bị trừ % C.cần'),
			'value' => array($this, 'customColumnCGridView'),
			'type' => 'raw',
			'htmlOptions'=>array('style'=>'width:40px','class'=>'text-right')
		),
		
		
		
		
		
		/*
		'luong_dochai',
		'luong_xe',
		'luong_dienthoai',
		'luong_thuenha',
		'luong_com_thang',
		'luong_com_ngay',
		'luong_taynghe',
		'luong_thamnien',
		'luong_doanhso',
		'luong_cong_khac',
		'luong_tru_khac',
		'luong_tru_baohiem',
		'luong_tru_doanphi',
		'luong_giamtru_giacanh',
		'luong_ngaylamviec',
		'luong_trangthai',
		'luong_ngaythem',
		'admin_id',
		
           */
            ),
            )); ?> </div>
			
			
			</div>
        </div>
      </div>
    </div>
