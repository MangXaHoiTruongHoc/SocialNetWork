<?php
/* @var $this KynangController */
/* @var $model Kynang */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'makynang'); ?>
		<?php echo $form->textField($model,'makynang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kynang'); ?>
		<?php echo $form->textArea($model,'kynang',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sonamkinhnghiem'); ?>
		<?php echo $form->textField($model,'sonamkinhnghiem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mota'); ?>
		<?php echo $form->textArea($model,'mota',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matk'); ?>
		<?php echo $form->textField($model,'matk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mamucdokn'); ?>
		<?php echo $form->textField($model,'mamucdokn'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->