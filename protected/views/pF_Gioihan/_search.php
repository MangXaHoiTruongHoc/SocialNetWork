<?php
/* @var $this PF_GioihanController */
/* @var $model PF_Gioihan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pf_ma_trangthai'); ?>
		<?php echo $form->textField($model,'pf_ma_trangthai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_tt_totnghiep'); ?>
		<?php echo $form->textField($model,'pf_tt_totnghiep'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_tt_taikhoan'); ?>
		<?php echo $form->textField($model,'pf_tt_taikhoan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_tt_ttbs'); ?>
		<?php echo $form->textField($model,'pf_tt_ttbs'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_tt_ngoaingu'); ?>
		<?php echo $form->textField($model,'pf_tt_ngoaingu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_tt_kynang'); ?>
		<?php echo $form->textField($model,'pf_tt_kynang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_tt_hdhoctap'); ?>
		<?php echo $form->textField($model,'pf_tt_hdhoctap'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_tt_hdngoaikhoa'); ?>
		<?php echo $form->textField($model,'pf_tt_hdngoaikhoa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_tt_knlamviec'); ?>
		<?php echo $form->textField($model,'pf_tt_knlamviec'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_tt_mtnghenghiep'); ?>
		<?php echo $form->textField($model,'pf_tt_mtnghenghiep'); ?>
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