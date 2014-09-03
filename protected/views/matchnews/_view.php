<?php
/* @var $this MatchnewsController */
/* @var $data Matchnews */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('matchNewsId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->matchNewsId), array('view', 'id'=>$data->matchNewsId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('newsStatusId')); ?>:</b>
	<?php echo CHtml::encode($data->newsStatusId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actorPlayerId')); ?>:</b>
	<?php echo CHtml::encode($data->actorPlayerId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minute')); ?>:</b>
	<?php echo CHtml::encode($data->minute); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matchId')); ?>:</b>
	<?php echo CHtml::encode($data->matchId); ?>
	<br />


</div>