<?php
/* @var $this ClubpointController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clubpoints',
);

$this->menu=array(
	array('label'=>'Create Clubpoint', 'url'=>array('create')),
	array('label'=>'Manage Clubpoint', 'url'=>array('admin')),
);
?>

<h1>Clubpoints</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
