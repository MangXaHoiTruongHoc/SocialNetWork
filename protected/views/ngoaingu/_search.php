<?php
/* @var $this NgoainguController */
/* @var $model Ngoaingu */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'mangoaingu'); ?>
		<?php echo $form->textField($model,'mangoaingu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tenngoaingu'); ?>
		<?php echo $form->textField($model,'tenngoaingu',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mamucdonn'); ?>
		<?php echo $form->textField($model,'mamucdonn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matk'); ?>
		<?php echo $form->textField($model,'matk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->