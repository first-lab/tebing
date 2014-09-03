<?php
/* @var $this ClubController */
/* @var $model Club */

$this->breadcrumbs=array(
	'Clubs'=>array('index'),
	$model->clubId,
);

$this->menu=array(
	array('label'=>'List Club', 'url'=>array('index')),
	array('label'=>'Create Club', 'url'=>array('create')),
	array('label'=>'Update Club', 'url'=>array('update', 'id'=>$model->clubId)),
	array('label'=>'Delete Club', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->clubId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Club', 'url'=>array('admin')),
);
?>

<h1>View Club #<?php echo $model->clubId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'clubId',
		'clubName',
		'clubShortName',
		'coach',
		'leagueId',
	),
)); ?>
