<?php
/* @var $this NguoidungController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nguoidungs',
);

$this->menu=array(
	array('label'=>'Create Nguoidung', 'url'=>array('create')),
	array('label'=>'Manage Nguoidung', 'url'=>array('admin')),
);
?>

<h1>Nguoidungs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
