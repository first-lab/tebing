<?php
/* @var $this StadiumController */
/* @var $model Stadium */

$this->breadcrumbs=array(
	'Stadia'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stadium', 'url'=>array('index')),
	array('label'=>'Manage Stadium', 'url'=>array('admin')),
);
?>

<h1>Create Stadium</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>