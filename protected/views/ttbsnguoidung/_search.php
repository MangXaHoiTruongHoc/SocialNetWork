<?php
/* @var $this TtbsnguoidungController */
/* @var $model Ttbsnguoidung */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'mattrnguoidung'); ?>
		<?php echo $form->textField($model,'mattrnguoidung'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dantoc'); ?>
		<?php echo $form->textField($model,'dantoc',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quoctich'); ?>
		<?php echo $form->textField($model,'quoctich',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sothich'); ?>
		<?php echo $form->textArea($model,'sothich',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tongiao'); ?>
		<?php echo $form->textField($model,'tongiao',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'slogan'); ?>
		<?php echo $form->textArea($model,'slogan',array('rows'=>6, 'cols'=>50)); ?>
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