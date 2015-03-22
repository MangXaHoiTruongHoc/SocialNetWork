<?php
/* @var $this NgoainguController */
/* @var $model Ngoaingu */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ngoaingu-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tenngoaingu'); ?>
		<?php echo $form->textField($model,'tenngoaingu',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tenngoaingu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mamucdonn'); ?>
		<?php echo $form->textField($model,'mamucdonn'); ?>
		<?php echo $form->error($model,'mamucdonn'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->