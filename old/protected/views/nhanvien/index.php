<?php
/* @var $this NhanvienController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nhanviens',
);

$this->menu=array(
	array('label'=>'Create Nhanvien', 'url'=>array('create')),
	array('label'=>'Manage Nhanvien', 'url'=>array('admin')),
);
?>

<h1>Nhanviens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
