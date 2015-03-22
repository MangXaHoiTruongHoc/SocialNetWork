<?php
/* @var $this KynangController */
/* @var $model Kynang */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kynang-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kynang'); ?>
		<?php echo $form->textArea($model,'kynang',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'kynang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sonamkinhnghiem'); ?>
		<?php echo $form->textField($model,'sonamkinhnghiem'); ?>
		<?php echo $form->error($model,'sonamkinhnghiem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mota'); ?>
		<?php echo $form->textArea($model,'mota',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mota'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'mamucdokn'); ?>
		<?php echo $form->textField($model,'mamucdokn'); ?>
		<?php echo $form->error($model,'mamucdokn'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->