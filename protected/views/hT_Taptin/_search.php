<?php
/* @var $this HT_TaptinController */
/* @var $model HT_Taptin */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ht_ma_tap_tin'); ?>
		<?php echo $form->textField($model,'ht_ma_tap_tin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ht_ma_tai_lieu'); ?>
		<?php echo $form->textField($model,'ht_ma_tai_lieu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ten_tap_tin'); ?>
		<?php echo $form->textField($model,'ten_tap_tin',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->