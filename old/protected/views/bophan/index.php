<?php
/* @var $this BophanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bophans',
);

$this->menu=array(
	array('label'=>'Create Bophan', 'url'=>array('create')),
	array('label'=>'Manage Bophan', 'url'=>array('admin')),
);
?>

<h1>Bophans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
