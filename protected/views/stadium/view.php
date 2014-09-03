<?php
/* @var $this StadiumController */
/* @var $model Stadium */

$this->breadcrumbs=array(
	'Stadia'=>array('index'),
	$model->stadiumId,
);

$this->menu=array(
	array('label'=>'List Stadium', 'url'=>array('index')),
	array('label'=>'Create Stadium', 'url'=>array('create')),
	array('label'=>'Update Stadium', 'url'=>array('update', 'id'=>$model->stadiumId)),
	array('label'=>'Delete Stadium', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stadiumId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stadium', 'url'=>array('admin')),
);
?>

<h1>View Stadium #<?php echo $model->stadiumId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'stadiumId',
		'stadiumName',
	),
)); ?>
