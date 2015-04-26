<?php
/* @var $this PF_GiaithuongController */
/* @var $model PF_Giaithuong */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pf_ma_giai_thuong'); ?>
		<?php echo $form->textField($model,'pf_ma_giai_thuong'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ten_giai_thuong'); ?>
		<?php echo $form->textField($model,'pf_ten_giai_thuong',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ngay_nhan_giai'); ?>
		<?php echo $form->textField($model,'pf_ngay_nhan_giai',array('size'=>10,'maxlength'=>10)); ?>
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