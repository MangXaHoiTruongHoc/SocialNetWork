<?php
/* @var $this PF_TtbsnguoidungController */
/* @var $model PF_Ttbsnguoidung */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pf--ttbsnguoidung-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableClientValidation'=>true,
    
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_dan_toc'); ?>
		<?php echo $form->textField($model,'pf_dan_toc',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pf_dan_toc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_quoc_tich'); ?>
		<?php echo $form->textField($model,'pf_quoc_tich',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pf_quoc_tich'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_so_thich'); ?>
		<?php echo $form->textArea($model,'pf_so_thich',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pf_so_thich'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_ton_giao'); ?>
		<?php echo $form->textField($model,'pf_ton_giao',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pf_ton_giao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_slogan'); ?>
		<?php echo $form->textArea($model,'pf_slogan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pf_slogan'); ?>
	</div>
    
<!--	<div class="row">
		<?php echo $form->labelEx($model,'ma_tai_khoan'); ?>
		<?php echo $form->textField($model,'ma_tai_khoan'); ?>
		<?php echo $form->error($model,'ma_tai_khoan'); ?>
	</div>
-->
	<?php
        $chuyennganh = new PF_Chuyennganh;
        
        $listcn = PF_Chuyennganh::model()->findAll(array('select'=>'pf_ma_chuyen_nganh,pf_chuyen_nganh'));
        $list =array();
        foreach($listcn as $l){
             $list[$l->pf_ma_chuyen_nganh] = $l->pf_chuyen_nganh;
        }
        
    ?>
     <div class="row">
        <?php echo $form->labelEx($model,'pf_ma_chuyen_nganh')?>
        <?php echo $form->dropDownList($model,'pf_ma_chuyen_nganh',$list,array('empty'=>"Chọn Chuyên Ngành"))?>
        <?php echo $form->error($model,'pf_ma_chuyen_nganh')?>
     </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->