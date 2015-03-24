<?php
/* @var $this PF_TotnghiepController */
/* @var $model PF_Totnghiep */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pf_ma_tn'); ?>
		<?php echo $form->textField($model,'pf_ma_tn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ten_truong_tn'); ?>
		<?php echo $form->textField($model,'pf_ten_truong_tn',array('size'=>60,'maxlength'=>200)); ?>
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
		<?php echo $form->label($model,'pf_ma_ket_qua_tn'); ?>
		<?php echo $form->textField($model,'pf_ma_ket_qua_tn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ma_tai_khoan'); ?>
		<?php echo $form->textField($model,'ma_tai_khoan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ma_chuyen_nganh'); ?>
		<?php echo $form->textField($model,'pf_ma_chuyen_nganh'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->