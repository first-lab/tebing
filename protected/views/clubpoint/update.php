<?php
/* @var $this ClubpointController */
/* @var $model Clubpoint */

$this->breadcrumbs=array(
	'Clubpoints'=>array('index'),
	$model->clubpointId=>array('view','id'=>$model->clubpointId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clubpoint', 'url'=>array('index')),
	array('label'=>'Create Clubpoint', 'url'=>array('create')),
	array('label'=>'View Clubpoint', 'url'=>array('view', 'id'=>$model->clubpointId)),
	array('label'=>'Manage Clubpoint', 'url'=>array('admin')),
);
?>

<h1>Update Clubpoint <?php echo $model->clubpointId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>