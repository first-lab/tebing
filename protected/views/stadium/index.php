<?php
/* @var $this StadiumController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stadia',
);

$this->menu=array(
	array('label'=>'Create Stadium', 'url'=>array('create')),
	array('label'=>'Manage Stadium', 'url'=>array('admin')),
);
?>

<h1>Stadia</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
