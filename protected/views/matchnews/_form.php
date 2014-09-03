<?php
/* @var $this MatchnewsController */
/* @var $model Matchnews */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'matchnews-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'newsStatusId'); ?>
		<?php echo $form->textField($model,'newsStatusId'); ?>
		<?php echo $form->error($model,'newsStatusId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actorPlayerId'); ?>
		<?php echo $form->textField($model,'actorPlayerId'); ?>
		<?php echo $form->error($model,'actorPlayerId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minute'); ?>
		<?php echo $form->textField($model,'minute',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'minute'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'matchId'); ?>
		<?php echo $form->textField($model,'matchId'); ?>
		<?php echo $form->error($model,'matchId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->