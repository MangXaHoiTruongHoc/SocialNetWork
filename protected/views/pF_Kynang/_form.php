<?php
/* @var $this PF_KynangController */
/* @var $model PF_Kynang */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pf--kynang-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'htmlOptions'=>array('class'=>'form-horizontal margin-none','autocomplete'=>'off'),
	'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
)); ?>
<div class='widget'>
	 <!-- Widget heading -->
    <div class="widget-head">
        <?php
		if($model->isNewRecord){
			echo "<h3 class='heading'>Thêm Kỹ Năng</h3>";
		}else{
			echo "<h3 class='heading'>Cập Nhật Kỹ Năng</h3>";
		}
		?>
    </div>	
		<div class="widget-body innerAll inner-2x">
			<div class="row innerLR">
				<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->

				<?php echo $form->errorSummary($model); ?>

				<div class="form-group">
					<?php echo $form->labelEx($model,'pf_ky_nang',array('class'=>'col-md-4 control-label')); ?>
					<div class="col-md-6">
					<?php echo $form->textField($model,'pf_ky_nang',array('class'=>'form-control','rows'=>6, 'cols'=>50)); ?>
					</div>
					<?php echo $form->error($model,'pf_ky_nang'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'pf_so_nam_kinh_nghiem',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6'>
					<?php echo $form->textField($model,'pf_so_nam_kinh_nghiem',array('class'=>'form-control')); ?>
					</div>
					<?php echo $form->error($model,'pf_so_nam_kinh_nghiem'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'pf_mo_ta',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6'>
					<?php echo $form->textArea($model,'pf_mo_ta',array('class'=>'form-control','rows'=>6, 'cols'=>50)); ?>
					</div>
					<?php echo $form->error($model,'pf_mo_ta'); ?>
				</div>
		    
			

				<div class="form-actions col-md-8">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary','style'=>'float:right')); ?>
				</div>
			</div>
		</div>
</div>
<?php $this->endWidget(); ?>

