<?php
/* @var $this BacluongController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bacluongs',
);

$this->menu=array(
	array('label'=>'Create Bacluong', 'url'=>array('create')),
	array('label'=>'Manage Bacluong', 'url'=>array('admin')),
);
?>

<h1>Bacluongs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
