<?php
/* @var $this BangcapController */
/* @var $model Bangcap */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'mabangcap'); ?>
		<?php echo $form->textField($model,'mabangcap'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tenbangcap'); ?>
		<?php echo $form->textField($model,'tenbangcap',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matk'); ?>
		<?php echo $form->textField($model,'matk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->