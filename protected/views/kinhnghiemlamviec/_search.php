<?php
/* @var $this KinhnghiemlamviecController */
/* @var $model Kinhnghiemlamviec */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'makinhnghiem'); ?>
		<?php echo $form->textField($model,'makinhnghiem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tencongty'); ?>
		<?php echo $form->textField($model,'tencongty',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tencongviec'); ?>
		<?php echo $form->textField($model,'tencongviec',array('size'=>50,'maxlength'=>50)); ?>
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
		<?php echo $form->label($model,'chucvu'); ?>
		<?php echo $form->textField($model,'chucvu',array('size'=>50,'maxlength'=>50)); ?>
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