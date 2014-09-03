<?php
/* @var $this MatchnewsController */
/* @var $model Matchnews */

$this->breadcrumbs=array(
	'Matchnews'=>array('index'),
	$model->matchNewsId,
);

$this->menu=array(
	array('label'=>'List Matchnews', 'url'=>array('index')),
	array('label'=>'Create Matchnews', 'url'=>array('create')),
	array('label'=>'Update Matchnews', 'url'=>array('update', 'id'=>$model->matchNewsId)),
	array('label'=>'Delete Matchnews', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->matchNewsId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Matchnews', 'url'=>array('admin')),
);
?>

<h1>View Matchnews #<?php echo $model->matchNewsId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'matchNewsId',
		'newsStatusId',
		'actorPlayerId',
		'minute',
		'matchId',
	),
)); ?>
