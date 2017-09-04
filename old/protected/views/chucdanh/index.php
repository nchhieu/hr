<?php
/* @var $this ChucdanhController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Chucdanhs',
);

$this->menu=array(
	array('label'=>'Create Chucdanh', 'url'=>array('create')),
	array('label'=>'Manage Chucdanh', 'url'=>array('admin')),
);
?>

<h1>Chucdanhs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
