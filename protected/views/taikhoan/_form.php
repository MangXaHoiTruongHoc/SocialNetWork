<?php
/* @var $this TaikhoanController */
/* @var $model Taikhoan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'taikhoan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hoten'); ?>
		<?php echo $form->textField($model,'hoten',array('size'=>30,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'hoten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ngaysinh'); ?>
		<?php echo $form->dateField($model,'ngaysinh',array('size'=>20,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ngaysinh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Gioitinh'); ?>
		<?php echo $form->textField($model,'Gioitinh',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'Gioitinh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar',array('size'=>30,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'avatar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'machuyennganh'); ?>
		<?php echo $form->textField($model,'machuyennganh'); ?>
		<?php echo $form->error($model,'machuyennganh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>30,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->