<?php
/* @var $this PF_KynangController */
/* @var $model PF_Kynang */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pf--kynang-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_ky_nang'); ?>
		<?php echo $form->textField($model,'pf_ky_nang',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pf_ky_nang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_so_nam_kinh_nghiem'); ?>
		<?php echo $form->textField($model,'pf_so_nam_kinh_nghiem'); ?>
		<?php echo $form->error($model,'pf_so_nam_kinh_nghiem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_mo_ta'); ?>
		<?php echo $form->textArea($model,'pf_mo_ta',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pf_mo_ta'); ?>
	</div>
    
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->