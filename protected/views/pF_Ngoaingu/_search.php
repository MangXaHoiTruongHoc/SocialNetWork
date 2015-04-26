<?php
/* @var $this PF_NgoainguController */
/* @var $model PF_Ngoaingu */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pf_ma_ngoai_ngu'); ?>
		<?php echo $form->textField($model,'pf_ma_ngoai_ngu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ten_ngoai_ngu'); ?>
		<?php echo $form->textField($model,'pf_ten_ngoai_ngu',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pf_ma_muc_do_nn'); ?>
		<?php echo $form->textField($model,'pf_ma_muc_do_nn'); ?>
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