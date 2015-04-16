<?php
/* @var $this TaikhoanController */
/* @var $model Taikhoan */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'taikhoan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
        'class'=>'form-horizontal margin-none','autocomplete'=>'off'
    ),
   	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<div class='widget'>
	<!-- Widget heading -->
    <div class="widget-head">
        <h3 class="heading">Cập Nhật Thông Tin Người Dùng</h3>
    </div>	
    	<div class="widget-body innerAll inner-2x">
			<div class="row innerLR">
	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p>
				<?php echo $form->errorSummary($model); ?> -->

				<div class="form-group">
					<?php echo $form->labelEx($model,'email',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6'>
					<?php echo $form->emailField($model,'email',array('class'=>'form-control','readonly'=>true,'size'=>50,'maxlength'=>50)); ?>
					</div>
					<?php echo $form->error($model,'email'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'ho_ten',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6'>
					<?php echo $form->textField($model,'ho_ten',array('class'=>'form-control','size'=>50,'maxlength'=>50)); ?>
					</div>
					<?php echo $form->error($model,'ho_ten'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'ngay_sinh',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6'>
					<?php echo $form->textField($model,'ngay_sinh',array('class'=>'form-control datepicker1','size'=>10,'maxlength'=>10)); ?>
					</div>
					<?php echo $form->error($model,'ngay_sinh'); ?>

                                        
                           
				</div>

				<div class="form-group" id="text">
					<?php echo $form->labelEx($model,'gioi_tinh',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6'>
					<div class="radio">
                        <label class="radio-custom">
                            <input type="radio" name="Taikhoan[gioi_tinh]" value='Nam' <?php if($model->gioi_tinh==='Nam') echo ("checked='checked' "); ?>>
                            <i class="fa fa-circle-o checked"></i>Nam
                            
                        </label>
                    </div>
                    <div class="radio">
                        <label class="radio-custom">
                            <input type="radio" name="Taikhoan[gioi_tinh]" value='Nữ'<?php if($model->gioi_tinh==='Nữ') echo ("checked='checked' " ); ?> >
                            <i class="fa fa-circle-o checked"></i>Nữ
                            
                        </label>
                    </div>
					
					</div>
					<?php echo $form->error($model,'gioi_tinh'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'hinh_dai_dien',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6 fileupload fileupload-new margin-none' data-provides='fileupload'>
						<span class="btn btn-default btn-file">
							<span class="fileupload-new">Select file</span>
                            <span class="fileupload-exists">Change</span>
							<?php echo $form->fileField($model,'hinh_dai_dien',array('class'=>'form-control margin-none')) ?>
						</span>
							<span class="fileupload-preview"></span>
                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">&times;</a>
					</div>
					<?php echo $form->error($model,'hinh_dai_dien'); ?>
				</div>

				

				<div class="form-group ">
					<?php echo $form->labelEx($model,'mat_khau',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6 border-none'>
					<?php echo $form->passwordField($model,'mat_khau',array('class'=>'form-control','size'=>32,'maxlength'=>32)); ?>
					</div>
					<?php echo $form->error($model,'mat_khau'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'ngay_tao',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6'>
					<?php echo $form->dateField($model,'ngay_tao',array('class'=>'form-control','size'=>10,'maxlength'=>10)); ?>
					</div>
					<?php echo $form->error($model,'ngay_tao'); ?>
				</div>

				<div class="form-actions col-md-7">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary','style'=>'float:right')); ?>
				</div>
			</div>

		</div>
</div>
<?php $this->endWidget(); ?>

