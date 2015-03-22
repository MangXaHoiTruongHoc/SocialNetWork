<?php
/* @var $this MuctieunghenghiepController */
/* @var $model Muctieunghenghiep */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'mamuctieu'); ?>
		<?php echo $form->textField($model,'mamuctieu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tencongty'); ?>
		<?php echo $form->textField($model,'tencongty',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vitri'); ?>
		<?php echo $form->textField($model,'vitri',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'muctieu'); ?>
		<?php echo $form->textArea($model,'muctieu',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matk'); ?>
		<?php echo $form->textField($model,'matk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maloaicv'); ?>
		<?php echo $form->textField($model,'maloaicv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matinhthanh'); ?>
		<?php echo $form->textField($model,'matinhthanh'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->