<?php
/* @var $this PF_DanhgiahosoController */
/* @var $model PF_Danhgiahoso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pf--danhgiahoso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_ma_danh_gia_ho_so'); ?>
		<?php echo $form->textField($model,'pf_ma_danh_gia_ho_so'); ?>
		<?php echo $form->error($model,'pf_ma_danh_gia_ho_so'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ma_tai_khoan'); ?>
		<?php echo $form->textField($model,'ma_tai_khoan'); ?>
		<?php echo $form->error($model,'ma_tai_khoan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_ma_ky_nang'); ?>
		<?php echo $form->textField($model,'pf_ma_ky_nang'); ?>
		<?php echo $form->error($model,'pf_ma_ky_nang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_ma_hdnk'); ?>
		<?php echo $form->textField($model,'pf_ma_hdnk'); ?>
		<?php echo $form->error($model,'pf_ma_hdnk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_ma_hdht'); ?>
		<?php echo $form->textField($model,'pf_ma_hdht'); ?>
		<?php echo $form->error($model,'pf_ma_hdht'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_noi_dung'); ?>
		<?php echo $form->textArea($model,'pf_noi_dung',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pf_noi_dung'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->