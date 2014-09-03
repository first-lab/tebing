<?php
/* @var $this LeagueController */
/* @var $model League */

$this->breadcrumbs=array(
	'Leagues'=>array('index'),
	$model->leagueId=>array('view','id'=>$model->leagueId),
	'Update',
);

$this->menu=array(
	array('label'=>'List League', 'url'=>array('index')),
	array('label'=>'Create League', 'url'=>array('create')),
	array('label'=>'View League', 'url'=>array('view', 'id'=>$model->leagueId)),
	array('label'=>'Manage League', 'url'=>array('admin')),
);
?>

<h1>Update League <?php echo $model->leagueId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>