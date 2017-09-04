<?php
/* @var $this NhanvienNghiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nhanvien Nghis',
);

$this->menu=array(
	array('label'=>'Create NhanvienNghi', 'url'=>array('create')),
	array('label'=>'Manage NhanvienNghi', 'url'=>array('admin')),
);
?>

<h1>Nhanvien Nghis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
