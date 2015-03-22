<?php
/* @var $this GiaithuongController */
/* @var $model Giaithuong */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'giaithuong-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tengiaithuong'); ?>
		<?php echo $form->textField($model,'tengiaithuong',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tengiaithuong'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ngaynhangiai'); ?>
		<?php echo $form->textField($model,'ngaynhangiai',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ngaynhangiai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mota'); ?>
		<?php echo $form->textArea($model,'mota',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mota'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->