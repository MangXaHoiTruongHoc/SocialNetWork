<?php
/* @var $this PF_DanhgiahosoController */
/* @var $model PF_Danhgiahoso */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pf_ma_danh_gia_ho_so'); ?>
		<?php echo $form->textField($model,'pf_ma_danh_gia_ho_so'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ma_tai_khoan'); ?>
		<?php echo $form->textField($model,'ma_tai_khoan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ma_ky_nang'); ?>
		<?php echo $form->textField($model,'pf_ma_ky_nang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ma_hdnk'); ?>
		<?php echo $form->textField($model,'pf_ma_hdnk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ma_hdht'); ?>
		<?php echo $form->textField($model,'pf_ma_hdht'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_noi_dung'); ?>
		<?php echo $form->textArea($model,'pf_noi_dung',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->