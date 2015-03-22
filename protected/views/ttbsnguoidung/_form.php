<?php
/* @var $this TtbsnguoidungController */
/* @var $model Ttbsnguoidung */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ttbsnguoidung-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dantoc'); ?>
		<?php echo $form->textField($model,'dantoc',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dantoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quoctich'); ?>
		<?php echo $form->textField($model,'quoctich',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'quoctich'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sothich'); ?>
		<?php echo $form->textArea($model,'sothich',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sothich'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tongiao'); ?>
		<?php echo $form->textField($model,'tongiao',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tongiao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'slogan'); ?>
		<?php echo $form->textArea($model,'slogan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'slogan'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->