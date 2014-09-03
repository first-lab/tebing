<?php
/* @var $this ClubpointController */
/* @var $model Clubpoint */

$this->breadcrumbs=array(
	'Clubpoints'=>array('index'),
	$model->clubpointId,
);

$this->menu=array(
	array('label'=>'List Clubpoint', 'url'=>array('index')),
	array('label'=>'Create Clubpoint', 'url'=>array('create')),
	array('label'=>'Update Clubpoint', 'url'=>array('update', 'id'=>$model->clubpointId)),
	array('label'=>'Delete Clubpoint', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->clubpointId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clubpoint', 'url'=>array('admin')),
);
?>

<h1>View Clubpoint #<?php echo $model->clubpointId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'clubpointId',
		'clubId',
		'leagueId',
		'totalPlusGoal',
		'totalMinusGoal',
		'point',
		'appearance',
	),
)); ?>
