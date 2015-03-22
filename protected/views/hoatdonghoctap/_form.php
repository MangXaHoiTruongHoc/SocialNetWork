<?php
/* @var $this HoatdonghoctapController */
/* @var $model Hoatdonghoctap */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hoatdonghoctap-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tenhoatdong'); ?>
		<?php echo $form->textField($model,'tenhoatdong',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tenhoatdong'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ngaybatdau'); ?>
		<?php echo $form->textField($model,'ngaybatdau',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ngaybatdau'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ngayketthuc'); ?>
		<?php echo $form->textField($model,'ngayketthuc',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ngayketthuc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mota'); ?>
		<?php echo $form->textArea($model,'mota',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vaitro'); ?>
		<?php echo $form->textArea($model,'vaitro',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'vaitro'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->