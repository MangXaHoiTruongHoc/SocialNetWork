<?php
/* @var $this AnphamController */
/* @var $model Anpham */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'anpham-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'tenanpham'); ?>
		<?php echo $form->textField($model,'tenanpham',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tenanpham'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ngayanhanh'); ?>
		<?php echo $form->textField($model,'ngayanhanh',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ngayanhanh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'url'); ?>
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