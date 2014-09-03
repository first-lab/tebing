<?php
/* @var $this ClubController */
/* @var $data Club */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('clubId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->clubId), array('view', 'id'=>$data->clubId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clubName')); ?>:</b>
	<?php echo CHtml::encode($data->clubName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clubShortName')); ?>:</b>
	<?php echo CHtml::encode($data->clubShortName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coach')); ?>:</b>
	<?php echo CHtml::encode($data->coach); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leagueId')); ?>:</b>
	<?php echo CHtml::encode($data->leagueId); ?>
	<br />


</div>