<?php
/* @var $this NhanvienLuongController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nhanvien Luongs',
);

$this->menu=array(
	array('label'=>'Create NhanvienLuong', 'url'=>array('create')),
	array('label'=>'Manage NhanvienLuong', 'url'=>array('admin')),
);
?>

<h1>Nhanvien Luongs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
