<?php
/* @var $this PF_HoatdonghoctapController */
/* @var $model PF_Hoatdonghoctap */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pf--hoatdongngoaikhoa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
	'htmlOptions' => array('class'=>'form-horizontal margin-none','autocomplete'=>'off','enctype' =>'multipart/form-data')
)); ?>
<div class='widget'>
	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->
	<div class="widget-head">
		<?php
		if($model->isNewRecord){
			echo "<h3 class='heading'>Thêm Hoạt Động Học Tập</h3>";
		}else{
			echo "<h3 class='heading'>Cập Nhật Hoạt Động Học Tập</h3>";
		}
		?>
    </div>	
		<div class="widget-body innerAll inner-2x">
			<div class="row innerLR">

				

				<div class="form-group">
					<?php echo $form->labelEx($model,'pf_ten_hoat_dong',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6'>
					<?php echo $form->textField($model,'pf_ten_hoat_dong',array('class'=>'form-control','rows'=>6, 'cols'=>50)); ?>
					</div>
					<?php echo $form->error($model,'pf_ten_hoat_dong'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'pf_ngay_bat_dau',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6'>
					<?php echo $form->textField($model,'pf_ngay_bat_dau',array('class'=>'form-control datepicker1','size'=>10,'maxlength'=>10)); ?>
					</div>
					<?php echo $form->error($model,'pf_ngay_bat_dau'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'pf_ngay_ket_thuc',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6 '>
					<?php echo $form->textField($model,'pf_ngay_ket_thuc',array('class'=>'form-control datepicker1','size'=>10,'maxlength'=>10)); ?>
					</div>
					<?php echo $form->error($model,'pf_ngay_ket_thuc'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'pf_vai_tro',array('class'=>'col-md-4 control-label')); ?>
					<div class="col-md-6">
					<?php echo $form->textField($model,'pf_vai_tro',array('class'=>'form-control','rows'=>6, 'cols'=>50)); ?>
					</div>
					<?php echo $form->error($model,'pf_vai_tro'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'pf_mo_ta',array('class'=>'col-md-4 control-label')); ?>
					<div class="col-md-6">
					<?php echo $form->textArea($model,'pf_mo_ta',array('class'=>'form-control','rows'=>6, 'cols'=>50)); ?>
					</div>
					<?php echo $form->error($model,'pf_mo_ta'); ?>
				</div>

			<!-- 	<div class="row">
					<?php echo $form->labelEx($model,'ma_tai_khoan'); ?>
					<?php echo $form->textField($model,'ma_tai_khoan'); ?>
					<?php echo $form->error($model,'ma_tai_khoan'); ?>
				</div> -->
				  <div class="form-group">
				  	<label class="col-md-4 control-label" for="">Hình Ảnh</label>
				  	<div class="col-md-6">
			        <?php
			        $this->widget('CMultiFileUpload', array(
			        'model'=>$model,
			        'name' => 'images', 
			        'attribute'=>'image',
			        'max'=>4,
			        'accept' => 'jpeg|jpg|gif|png|pdf', // useful for verifying files
			        'duplicate' => 'Duplicate file!', // useful, i think
			        'denied' => 'Invalid file type', // useful, i think
			        'htmlOptions' => array( 'multiple' => 'multiple'),
			        ));
			        ?>
			        </div>
			    </div>
				<div class="form-actions col-md-8">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary','style'=>'float:right')); ?>
				</div>
			</div>
		</div>
</div><!-- form -->
<?php $this->endWidget(); ?>
