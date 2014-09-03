<?php
/* @var $this LeagueController */
/* @var $data League */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('leagueId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->leagueId), array('view', 'id'=>$data->leagueId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leagueName')); ?>:</b>
	<?php echo CHtml::encode($data->leagueName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leagueShortName')); ?>:</b>
	<?php echo CHtml::encode($data->leagueShortName); ?>
	<br />


</div>