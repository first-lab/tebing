<?php
/* @var $this MatchnewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Matchnews',
);

$this->menu=array(
	array('label'=>'Create Matchnews', 'url'=>array('create')),
	array('label'=>'Manage Matchnews', 'url'=>array('admin')),
);
?>

<h1>Matchnews</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
