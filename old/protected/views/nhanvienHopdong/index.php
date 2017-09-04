<?php
/* @var $this NhanvienHopdongController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nhanvien Hopdongs',
);

$this->menu=array(
	array('label'=>'Create NhanvienHopdong', 'url'=>array('create')),
	array('label'=>'Manage NhanvienHopdong', 'url'=>array('admin')),
);
?>

<h1>Nhanvien Hopdongs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
