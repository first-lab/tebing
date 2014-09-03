<?php
/* @var $this PlayerController */
/* @var $model Player */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'player-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'playerName'); ?>
		<?php echo $form->textField($model,'playerName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'playerName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clubId'); ?>
		<?php echo $form->textField($model,'clubId'); ?>
		<?php echo $form->error($model,'clubId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goalTotal'); ?>
		<?php echo $form->textField($model,'goalTotal'); ?>
		<?php echo $form->error($model,'goalTotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assistTotal'); ?>
		<?php echo $form->textField($model,'assistTotal'); ?>
		<?php echo $form->error($model,'assistTotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'yellowCardTotal'); ?>
		<?php echo $form->textField($model,'yellowCardTotal'); ?>
		<?php echo $form->error($model,'yellowCardTotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'redCardTotal'); ?>
		<?php echo $form->textField($model,'redCardTotal'); ?>
		<?php echo $form->error($model,'redCardTotal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->