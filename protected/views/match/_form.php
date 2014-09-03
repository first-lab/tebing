<?php
/* @var $this MatchController */
/* @var $model Match */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'match-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'team1'); ?>
		<?php echo $form->textField($model,'team1'); ?>
		<?php echo $form->error($model,'team1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'team2'); ?>
		<?php echo $form->textField($model,'team2'); ?>
		<?php echo $form->error($model,'team2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dueDate'); ?>
		<?php echo $form->textField($model,'dueDate'); ?>
		<?php echo $form->error($model,'dueDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stadiumId'); ?>
		<?php echo $form->textField($model,'stadiumId'); ?>
		<?php echo $form->error($model,'stadiumId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'leagueId'); ?>
		<?php echo $form->textField($model,'leagueId'); ?>
		<?php echo $form->error($model,'leagueId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->