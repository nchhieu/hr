<?php
/* @var $this NhanvienGhichuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nhanvien Ghichus',
);

$this->menu=array(
	array('label'=>'Create NhanvienGhichu', 'url'=>array('create')),
	array('label'=>'Manage NhanvienGhichu', 'url'=>array('admin')),
);
?>

<h1>Nhanvien Ghichus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
