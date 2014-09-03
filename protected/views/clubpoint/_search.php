<?php
/* @var $this ClubpointController */
/* @var $model Clubpoint */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'clubpointId'); ?>
		<?php echo $form->textField($model,'clubpointId',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clubId'); ?>
		<?php echo $form->textField($model,'clubId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'leagueId'); ?>
		<?php echo $form->textField($model,'leagueId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'totalPlusGoal'); ?>
		<?php echo $form->textField($model,'totalPlusGoal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'totalMinusGoal'); ?>
		<?php echo $form->textField($model,'totalMinusGoal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'point'); ?>
		<?php echo $form->textField($model,'point'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'appearance'); ?>
		<?php echo $form->textField($model,'appearance'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->