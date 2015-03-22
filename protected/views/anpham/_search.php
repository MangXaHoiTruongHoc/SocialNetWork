<?php
/* @var $this AnphamController */
/* @var $model Anpham */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'maanpham'); ?>
		<?php echo $form->textField($model,'maanpham'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tenanpham'); ?>
		<?php echo $form->textField($model,'tenanpham',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ngayanhanh'); ?>
		<?php echo $form->textField($model,'ngayanhanh',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mota'); ?>
		<?php echo $form->textArea($model,'mota',array('rows'=>6, 'cols'=>50)); ?>
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