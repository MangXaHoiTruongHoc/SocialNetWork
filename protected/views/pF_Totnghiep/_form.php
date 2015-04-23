<?php
/* @var $this PF_TotnghiepController */
/* @var $model PF_Totnghiep */
/* @var $form CActiveForm */
?>


    
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'totnghiep-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
//	'enableAjaxValidation'=>false,
//    'htmlOptions'=>array(
//     'onsubmit'=>"return false;",/* Disable normal form submit */
//     'onkeypress'=>" if(event.keyCode == 13){ sendSubmit(); } " /* Do ajax call when user presses enter key */
//    ),
	'htmlOptions'=>array('class'=>'form-horizontal margin-none','autocomplete'=>'off'),
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); 
    
?>
 <div class='widget'>   
	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?> -->
	<div class="widget-head">
        <?php
		if($model->isNewRecord){
			echo "<h3 class='heading'>Thêm Trường Tốt Nghiệp</h3>";
		}else{
			echo "<h3 class='heading'>Cập nhật Trường Tốt Nghiệp</h3>";
		}
		?>
    </div>
    	<!-- // Widget heading END -->
      	<div class="widget-body innerAll inner-2x">
        	<!-- Row -->
       		 <div class="row innerLR">
					<div class="form-group">
						<?php echo $form->labelEx($model,'pf_ten_truong_tn',array('class'=>'col-md-4 control-label')); ?>
						<div class='col-md-6'>
						<?php echo $form->textField($model,'pf_ten_truong_tn',array('class'=>'form-control','size'=>60,'maxlength'=>200)); ?>
						</div>
						<?php echo $form->error($model,'pf_ten_truong_tn'); ?>
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
				    <?php
				        // Thực hiện lấy thông tin từ bản kết quả tốt nghiệp
				        $ketqua = PF_Ketquatotnghiep::model()->findAll(array('select'=>'pf_ma_ket_qua_tn,pf_ket_qua'));
				        $list = array();
				        foreach($ketqua as $k){
				           $list[$k->pf_ma_ket_qua_tn] = $k->pf_ket_qua; 
				        }
				    ?>
					<div class="form-group">
						<?php echo $form->labelEx($model,'pf_ma_ket_qua_tn',array('class'=>'col-md-4 control-label')); ?>
						<div class='col-md-6'>
						<?php echo $form->dropDownList($model,'pf_ma_ket_qua_tn',$list,array('empty'=>"Chọn kết quả",'style'=>'width:293.438px;height:32px','class'=>'select2_6_2')); ?>
						</div>
						<?php echo $form->error($model,'pf_ma_ket_qua_tn'); ?>
					</div>

				<!--	<div class="row">
						<?php echo $form->labelEx($model,'ma_tai_khoan'); ?>
						<?php echo $form->textField($model,'ma_tai_khoan'); ?>
						<?php echo $form->error($model,'ma_tai_khoan'); ?>
					</div>
				    -->
				    <?php
				    // Thực hiện lấy thông tin từ bản kết quả chuyên ngành 
				        $chuyennganh = PF_Chuyennganh::model()->findAll();
				        $listcn = array();
				        
				        foreach($chuyennganh as $c){
				           $listcn[$c->pf_ma_chuyen_nganh] = $c->pf_chuyen_nganh; 
				        }
				    ?>
					<div class="form-group">
						<?php echo $form->labelEx($model,'pf_ma_chuyen_nganh',array('class'=>'col-md-4 control-label')); ?>
						<div class='col-md-6'>
						<?php echo $form->dropDownList($model,'pf_ma_chuyen_nganh',$listcn,array('empty'=>"Chọn Chuyên Ngành",'style'=>'width:293.438px;height:32px','class'=>'select2_6_2')); ?>
						</div>
						<?php echo $form->error($model,'pf_ma_chuyen_nganh'); ?>
					</div>

					<div class="form-actions col-md-6">
						<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary','style'=>'float:right')); ?>
					</div>
			</div>
		</div>
</div>
<?php $this->endWidget(); ?>

