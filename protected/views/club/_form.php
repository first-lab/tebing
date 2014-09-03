<?php
/* @var $this ClubController */
/* @var $model Club */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'club-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'clubName'); ?>
		<?php echo $form->textField($model,'clubName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'clubName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clubShortName'); ?>
		<?php echo $form->textField($model,'clubShortName',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'clubShortName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'coach'); ?>
		<?php echo $form->textField($model,'coach',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'coach'); ?>
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