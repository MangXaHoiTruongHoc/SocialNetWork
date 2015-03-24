<?php
/* @var $this PF_TtbsnguoidungController */
/* @var $model PF_Ttbsnguoidung */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pf_ma_ttr_nguoi_dung'); ?>
		<?php echo $form->textField($model,'pf_ma_ttr_nguoi_dung'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_dan_toc'); ?>
		<?php echo $form->textField($model,'pf_dan_toc',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_quoc_tich'); ?>
		<?php echo $form->textField($model,'pf_quoc_tich',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_so_thich'); ?>
		<?php echo $form->textArea($model,'pf_so_thich',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ton_giao'); ?>
		<?php echo $form->textField($model,'pf_ton_giao',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_slogan'); ?>
		<?php echo $form->textArea($model,'pf_slogan',array('rows'=>6, 'cols'=>50)); ?>
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