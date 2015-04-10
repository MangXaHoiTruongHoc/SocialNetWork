<?php
/* @var $this PF_KynangController */
/* @var $model PF_Kynang */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pf_ma_ky_nang'); ?>
		<?php echo $form->textField($model,'pf_ma_ky_nang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ky_nang'); ?>
		<?php echo $form->textArea($model,'pf_ky_nang',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_so_nam_kinh_nghiem'); ?>
		<?php echo $form->textField($model,'pf_so_nam_kinh_nghiem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_mo_ta'); ?>
		<?php echo $form->textArea($model,'pf_mo_ta',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ma_tai_khoan'); ?>
		<?php echo $form->textField($model,'ma_tai_khoan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ma_muc_do_kn'); ?>
		<?php echo $form->textField($model,'pf_ma_muc_do_kn'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->