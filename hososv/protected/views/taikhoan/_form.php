<?php
/* @var $this TaikhoanController */
/* @var $model Taikhoan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'taikhoan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
   	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ho_ten'); ?>
		<?php echo $form->textField($model,'ho_ten',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ho_ten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ngay_sinh'); ?>
		<?php echo $form->dateField($model,'ngay_sinh',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ngay_sinh'); ?>
	</div>

	<div class="row" id="text">
		<?php echo $form->labelEx($model,'gioi_tinh'); ?>
		<?php echo $form->radioButtonList($model,'gioi_tinh',array('Nam'=>'Nam','Nữ'=>'Nữ'),array('separator'=>'', 'labelOptions'=>array('style'=>'display: inline; margin: 0px; width:60px')));?>
		<?php echo $form->error($model,'gioi_tinh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hinh_dai_dien'); ?>
		<?php echo $form->fileField($model,'hinh_dai_dien') ?>
		<?php echo $form->error($model,'hinh_dai_dien'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'mat_khau'); ?>
		<?php echo $form->passwordField($model,'mat_khau',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'mat_khau'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ngay_tao'); ?>
		<?php echo $form->dateField($model,'ngay_tao',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ngay_tao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->