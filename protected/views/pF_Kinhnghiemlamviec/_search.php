<?php
/* @var $this PF_KinhnghiemlamviecController */
/* @var $model PF_Kinhnghiemlamviec */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pf_ma_kinh_nghiem'); ?>
		<?php echo $form->textField($model,'pf_ma_kinh_nghiem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ten_cong_ty'); ?>
		<?php echo $form->textField($model,'pf_ten_cong_ty',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ten_cong_viec'); ?>
		<?php echo $form->textField($model,'pf_ten_cong_viec',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ngay_bat_dau'); ?>
		<?php echo $form->textField($model,'pf_ngay_bat_dau',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ngay_ket_thuc'); ?>
		<?php echo $form->textField($model,'pf_ngay_ket_thuc',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_chuc_vu'); ?>
		<?php echo $form->textField($model,'pf_chuc_vu',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_mo_ta'); ?>
		<?php echo $form->textArea($model,'pf_mo_ta',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ma_tai_khoan'); ?>
		<?php echo $form->textField($model,'ma_tai_khoan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->