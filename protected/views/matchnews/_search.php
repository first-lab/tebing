<?php
/* @var $this MatchnewsController */
/* @var $model Matchnews */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'matchNewsId'); ?>
		<?php echo $form->textField($model,'matchNewsId',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'newsStatusId'); ?>
		<?php echo $form->textField($model,'newsStatusId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actorPlayerId'); ?>
		<?php echo $form->textField($model,'actorPlayerId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minute'); ?>
		<?php echo $form->textField($model,'minute',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matchId'); ?>
		<?php echo $form->textField($model,'matchId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->