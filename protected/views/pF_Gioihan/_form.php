<?php
/* @var $this PF_GioihanController */
/* @var $model PF_Gioihan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pf--gioihan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_tt_totnghiep'); ?>
		<?php echo $form->textField($model,'pf_tt_totnghiep'); ?>
		<?php echo $form->error($model,'pf_tt_totnghiep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_tt_taikhoan'); ?>
		<?php echo $form->textField($model,'pf_tt_taikhoan'); ?>
		<?php echo $form->error($model,'pf_tt_taikhoan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_tt_ttbs'); ?>
		<?php echo $form->textField($model,'pf_tt_ttbs'); ?>
		<?php echo $form->error($model,'pf_tt_ttbs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_tt_ngoaingu'); ?>
		<?php echo $form->textField($model,'pf_tt_ngoaingu'); ?>
		<?php echo $form->error($model,'pf_tt_ngoaingu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_tt_kynang'); ?>
		<?php echo $form->textField($model,'pf_tt_kynang'); ?>
		<?php echo $form->error($model,'pf_tt_kynang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_tt_hdhoctap'); ?>
		<?php echo $form->textField($model,'pf_tt_hdhoctap'); ?>
		<?php echo $form->error($model,'pf_tt_hdhoctap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_tt_hdngoaikhoa'); ?>
		<?php echo $form->textField($model,'pf_tt_hdngoaikhoa'); ?>
		<?php echo $form->error($model,'pf_tt_hdngoaikhoa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_tt_knlamviec'); ?>
		<?php echo $form->textField($model,'pf_tt_knlamviec'); ?>
		<?php echo $form->error($model,'pf_tt_knlamviec'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_tt_mtnghenghiep'); ?>
		<?php echo $form->textField($model,'pf_tt_mtnghenghiep'); ?>
		<?php echo $form->error($model,'pf_tt_mtnghenghiep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ma_tai_khoan'); ?>
		<?php echo $form->textField($model,'ma_tai_khoan'); ?>
		<?php echo $form->error($model,'ma_tai_khoan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->