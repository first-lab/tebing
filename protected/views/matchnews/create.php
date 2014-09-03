<?php
/* @var $this MatchnewsController */
/* @var $model Matchnews */

$this->breadcrumbs=array(
	'Matchnews'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Matchnews', 'url'=>array('index')),
	array('label'=>'Manage Matchnews', 'url'=>array('admin')),
);
?>

<h1>Create Matchnews</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>