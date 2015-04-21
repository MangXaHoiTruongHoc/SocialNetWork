<?php
/* @var $this PF_HoatdonghoctapController */
/* @var $model PF_Hoatdonghoctap */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pf_ma_hdht'); ?>
		<?php echo $form->textField($model,'pf_ma_hdht'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ten_hoat_dong'); ?>
		<?php echo $form->textField($model,'pf_ten_hoat_dong',array('size'=>50,'maxlength'=>50)); ?>
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
		<?php echo $form->label($model,'pf_mo_ta'); ?>
		<?php echo $form->textArea($model,'pf_mo_ta',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_vai_tro'); ?>
		<?php echo $form->textArea($model,'pf_vai_tro',array('rows'=>6, 'cols'=>50)); ?>
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