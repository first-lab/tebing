<?php
/* @var $this PlayerController */
/* @var $data Player */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('playerId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->playerId), array('view', 'id'=>$data->playerId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('playerName')); ?>:</b>
	<?php echo CHtml::encode($data->playerName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clubId')); ?>:</b>
	<?php echo CHtml::encode($data->clubId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goalTotal')); ?>:</b>
	<?php echo CHtml::encode($data->goalTotal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assistTotal')); ?>:</b>
	<?php echo CHtml::encode($data->assistTotal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('yellowCardTotal')); ?>:</b>
	<?php echo CHtml::encode($data->yellowCardTotal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('redCardTotal')); ?>:</b>
	<?php echo CHtml::encode($data->redCardTotal); ?>
	<br />


</div>