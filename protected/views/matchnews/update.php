<?php
/* @var $this MatchnewsController */
/* @var $model Matchnews */

$this->breadcrumbs=array(
	'Matchnews'=>array('index'),
	$model->matchNewsId=>array('view','id'=>$model->matchNewsId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Matchnews', 'url'=>array('index')),
	array('label'=>'Create Matchnews', 'url'=>array('create')),
	array('label'=>'View Matchnews', 'url'=>array('view', 'id'=>$model->matchNewsId)),
	array('label'=>'Manage Matchnews', 'url'=>array('admin')),
);
?>

<h1>Update Matchnews <?php echo $model->matchNewsId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>