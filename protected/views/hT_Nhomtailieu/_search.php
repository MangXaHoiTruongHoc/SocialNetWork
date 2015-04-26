<?php
/* @var $this HT_NhomtailieuController */
/* @var $model HT_Nhomtailieu */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ht_ma_nhom_tl'); ?>
		<?php echo $form->textField($model,'ht_ma_nhom_tl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ten_nhom_tl'); ?>
		<?php echo $form->textField($model,'ten_nhom_tl',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->