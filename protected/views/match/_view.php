<?php
/* @var $this MatchController */
/* @var $data Match */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('matchId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->matchId), array('view', 'id'=>$data->matchId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team1')); ?>:</b>
	<?php echo CHtml::encode($data->team1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team2')); ?>:</b>
	<?php echo CHtml::encode($data->team2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dueDate')); ?>:</b>
	<?php echo CHtml::encode($data->dueDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stadiumId')); ?>:</b>
	<?php echo CHtml::encode($data->stadiumId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leagueId')); ?>:</b>
	<?php echo CHtml::encode($data->leagueId); ?>
	<br />


</div>