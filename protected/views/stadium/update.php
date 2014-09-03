<?php
/* @var $this StadiumController */
/* @var $model Stadium */

$this->breadcrumbs=array(
	'Stadia'=>array('index'),
	$model->stadiumId=>array('view','id'=>$model->stadiumId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stadium', 'url'=>array('index')),
	array('label'=>'Create Stadium', 'url'=>array('create')),
	array('label'=>'View Stadium', 'url'=>array('view', 'id'=>$model->stadiumId)),
	array('label'=>'Manage Stadium', 'url'=>array('admin')),
);
?>

<h1>Update Stadium <?php echo $model->stadiumId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>