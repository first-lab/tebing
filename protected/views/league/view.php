<?php
/* @var $this LeagueController */
/* @var $model League */

$this->breadcrumbs=array(
	'Leagues'=>array('index'),
	$model->leagueId,
);

$this->menu=array(
	array('label'=>'List League', 'url'=>array('index')),
	array('label'=>'Create League', 'url'=>array('create')),
	array('label'=>'Update League', 'url'=>array('update', 'id'=>$model->leagueId)),
	array('label'=>'Delete League', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->leagueId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage League', 'url'=>array('admin')),
);
?>

<h1>View League #<?php echo $model->leagueId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'leagueId',
		'leagueName',
		'leagueShortName',
	),
)); ?>
