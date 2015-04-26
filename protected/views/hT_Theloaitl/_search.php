<?php
/* @var $this HT_TheloaitlController */
/* @var $model HT_Theloaitl */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ht_ma_the_loai'); ?>
		<?php echo $form->textField($model,'ht_ma_the_loai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ten_the_loai'); ?>
		<?php echo $form->textField($model,'ten_the_loai',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->