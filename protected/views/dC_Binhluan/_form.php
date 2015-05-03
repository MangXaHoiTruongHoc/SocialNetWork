<?php
/* @var $this DC_BinhluanController */
/* @var $model DC_Binhluan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dc--binhluan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ma_tai_khoan'); ?>
		<?php echo $form->textField($model,'ma_tai_khoan'); ?>
		<?php echo $form->error($model,'ma_tai_khoan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'noi_dung'); ?>
		<?php echo $form->textField($model,'noi_dung',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'noi_dung'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ht_ma_tai_lieu'); ?>
		<?php echo $form->textField($model,'ht_ma_tai_lieu'); ?>
		<?php echo $form->error($model,'ht_ma_tai_lieu'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->