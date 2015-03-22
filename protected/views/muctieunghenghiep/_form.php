<?php
/* @var $this MuctieunghenghiepController */
/* @var $model Muctieunghenghiep */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'muctieunghenghiep-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tencongty'); ?>
		<?php echo $form->textField($model,'tencongty',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tencongty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vitri'); ?>
		<?php echo $form->textField($model,'vitri',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'vitri'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'muctieu'); ?>
		<?php echo $form->textArea($model,'muctieu',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'muctieu'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'maloaicv'); ?>
		<?php echo $form->textField($model,'maloaicv'); ?>
		<?php echo $form->error($model,'maloaicv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'matinhthanh'); ?>
		<?php echo $form->textField($model,'matinhthanh'); ?>
		<?php echo $form->error($model,'matinhthanh'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->