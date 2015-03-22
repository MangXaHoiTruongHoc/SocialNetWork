<?php
/* @var $this HoatdongngoaikhoaController */
/* @var $model Hoatdongngoaikhoa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'mahdnk'); ?>
		<?php echo $form->textField($model,'mahdnk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tenhoatdong'); ?>
		<?php echo $form->textArea($model,'tenhoatdong',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ngaybatdau'); ?>
		<?php echo $form->textField($model,'ngaybatdau',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ngayketthuc'); ?>
		<?php echo $form->textField($model,'ngayketthuc',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vaitro'); ?>
		<?php echo $form->textField($model,'vaitro',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mota'); ?>
		<?php echo $form->textArea($model,'mota',array('rows'=>6, 'cols'=>50)); ?>
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