<?php
/* @var $this StadiumController */
/* @var $data Stadium */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('stadiumId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->stadiumId), array('view', 'id'=>$data->stadiumId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stadiumName')); ?>:</b>
	<?php echo CHtml::encode($data->stadiumName); ?>
	<br />


</div>