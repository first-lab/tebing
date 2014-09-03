<?php
/* @var $this PlayerController */
/* @var $model Player */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'playerId'); ?>
		<?php echo $form->textField($model,'playerId',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'playerName'); ?>
		<?php echo $form->textField($model,'playerName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clubId'); ?>
		<?php echo $form->textField($model,'clubId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goalTotal'); ?>
		<?php echo $form->textField($model,'goalTotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assistTotal'); ?>
		<?php echo $form->textField($model,'assistTotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'yellowCardTotal'); ?>
		<?php echo $form->textField($model,'yellowCardTotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'redCardTotal'); ?>
		<?php echo $form->textField($model,'redCardTotal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->