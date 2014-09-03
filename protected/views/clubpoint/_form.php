<?php
/* @var $this ClubpointController */
/* @var $model Clubpoint */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clubpoint-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'clubId'); ?>
		<?php echo $form->textField($model,'clubId'); ?>
		<?php echo $form->error($model,'clubId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'leagueId'); ?>
		<?php echo $form->textField($model,'leagueId'); ?>
		<?php echo $form->error($model,'leagueId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'totalPlusGoal'); ?>
		<?php echo $form->textField($model,'totalPlusGoal'); ?>
		<?php echo $form->error($model,'totalPlusGoal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'totalMinusGoal'); ?>
		<?php echo $form->textField($model,'totalMinusGoal'); ?>
		<?php echo $form->error($model,'totalMinusGoal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'point'); ?>
		<?php echo $form->textField($model,'point'); ?>
		<?php echo $form->error($model,'point'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'appearance'); ?>
		<?php echo $form->textField($model,'appearance'); ?>
		<?php echo $form->error($model,'appearance'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->