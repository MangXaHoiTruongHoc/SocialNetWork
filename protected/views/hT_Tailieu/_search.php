<?php
/* @var $this HT_TailieuController */
/* @var $model HT_Tailieu */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ht_ma_tai_lieu'); ?>
		<?php echo $form->textField($model,'ht_ma_tai_lieu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gioi_thieu'); ?>
		<?php echo $form->textField($model,'gioi_thieu',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ten_tai_lieu'); ?>
		<?php echo $form->textField($model,'ten_tai_lieu',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tieu_de'); ?>
		<?php echo $form->textField($model,'tieu_de',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'so_trang'); ?>
		<?php echo $form->textField($model,'so_trang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tac_gia'); ?>
		<?php echo $form->textField($model,'tac_gia',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nha_xuat_ban'); ?>
		<?php echo $form->textField($model,'nha_xuat_ban',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->