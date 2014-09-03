<?php
/* @var $this ClubpointController */
/* @var $model Clubpoint */

$this->breadcrumbs=array(
	'Clubpoints'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Clubpoint', 'url'=>array('index')),
	array('label'=>'Manage Clubpoint', 'url'=>array('admin')),
);
?>

<h1>Create Clubpoint</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>