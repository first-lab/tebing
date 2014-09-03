<?php
/* @var $this MatchController */
/* @var $model Match */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'matchId'); ?>
		<?php echo $form->textField($model,'matchId',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'team1'); ?>
		<?php echo $form->textField($model,'team1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'team2'); ?>
		<?php echo $form->textField($model,'team2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dueDate'); ?>
		<?php echo $form->textField($model,'dueDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stadiumId'); ?>
		<?php echo $form->textField($model,'stadiumId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'leagueId'); ?>
		<?php echo $form->textField($model,'leagueId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->