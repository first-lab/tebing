<?php
/* @var $this ClubpointController */
/* @var $data Clubpoint */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('clubpointId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->clubpointId), array('view', 'id'=>$data->clubpointId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clubId')); ?>:</b>
	<?php echo CHtml::encode($data->clubId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leagueId')); ?>:</b>
	<?php echo CHtml::encode($data->leagueId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalPlusGoal')); ?>:</b>
	<?php echo CHtml::encode($data->totalPlusGoal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalMinusGoal')); ?>:</b>
	<?php echo CHtml::encode($data->totalMinusGoal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('point')); ?>:</b>
	<?php echo CHtml::encode($data->point); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('appearance')); ?>:</b>
	<?php echo CHtml::encode($data->appearance); ?>
	<br />


</div>