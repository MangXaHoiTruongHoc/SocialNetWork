<?php
/* @var $this TaikhoanController */
/* @var $model Taikhoan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ma_tai_khoan'); ?>
		<?php echo $form->textField($model,'ma_tai_khoan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ho_ten'); ?>
		<?php echo $form->textField($model,'ho_ten',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ngay_sinh'); ?>
		<?php echo $form->textField($model,'ngay_sinh',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gioi_tinh'); ?>
		<?php echo $form->textField($model,'gioi_tinh',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hinh_dai_dien'); ?>
		<?php echo $form->textField($model,'hinh_dai_dien',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ma_chuyen_nganh'); ?>
		<?php echo $form->textField($model,'ma_chuyen_nganh'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mat_khau'); ?>
		<?php echo $form->textField($model,'mat_khau',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ngay_tao'); ?>
		<?php echo $form->textField($model,'ngay_tao',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->