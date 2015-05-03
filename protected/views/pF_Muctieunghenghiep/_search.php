<?php
/* @var $this PF_MuctieunghenghiepController */
/* @var $model PF_Muctieunghenghiep */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pf_ma_muc_tieu'); ?>
		<?php echo $form->textField($model,'pf_ma_muc_tieu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ten_cong_ty'); ?>
		<?php echo $form->textField($model,'pf_ten_cong_ty',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ma_nganh_nghe'); ?>
		<?php echo $form->textField($model,'ma_nganh_nghe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_muc_tieu'); ?>
		<?php echo $form->textArea($model,'pf_muc_tieu',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ma_tai_khoan'); ?>
		<?php echo $form->textField($model,'ma_tai_khoan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ma_loai_cv'); ?>
		<?php echo $form->textField($model,'pf_ma_loai_cv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_noi_lam_viec'); ?>
		<?php echo $form->textField($model,'pf_noi_lam_viec',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->