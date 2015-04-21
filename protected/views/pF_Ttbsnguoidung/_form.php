<?php
/* @var $this PF_TtbsnguoidungController */
/* @var $model PF_Ttbsnguoidung */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pf--ttbsnguoidung-form',
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
			echo "<h3 class='heading'>Thêm thông tin bổ sung</h3>";
		}else{
			echo "<h3 class='heading'>Cập nhật thông tin bổ sung</h3>";
		}
		?>
    </div>
    <!-- // Widget heading END -->
      	<div class="widget-body innerAll inner-2x">
        	<!-- Row -->
       		 <div class="row innerLR">
				<!-- <p class="note">Fields with <span class="required">*</span> are required.</p>

				<?php echo $form->errorSummary($model); ?> -->

				<div class="row">
					<?php echo $form->labelEx($model,'pf_dan_toc',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6'>
					<?php echo $form->textField($model,'pf_dan_toc',array('class'=>'form-control','size'=>10,'maxlength'=>10)); ?>
					</div>
					<?php echo $form->error($model,'pf_dan_toc'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'pf_quoc_tich',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6'>
					<?php echo $form->textField($model,'pf_quoc_tich',array('class'=>'form-control','size'=>20,'maxlength'=>20)); ?>
					</div>
					<?php echo $form->error($model,'pf_quoc_tich'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'pf_so_thich',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6'>
					<?php echo $form->textArea($model,'pf_so_thich',array('class'=>'form-control','rows'=>6, 'cols'=>50)); ?>
					</div>
					<?php echo $form->error($model,'pf_so_thich'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'pf_ton_giao',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6'>
					<?php echo $form->textField($model,'pf_ton_giao',array('class'=>'form-control','size'=>20,'maxlength'=>20)); ?>
					</div>
					<?php echo $form->error($model,'pf_ton_giao'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'pf_slogan',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6'>
					<?php echo $form->textArea($model,'pf_slogan',array('class'=>'form-control','rows'=>6, 'cols'=>50)); ?>
					</div>
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
			        <?php echo $form->labelEx($model,'pf_ma_chuyen_nganh',array('class'=>'col-md-4 control-label'))?>
			        <div class='col-md-6'>
			        <?php echo $form->dropDownList($model,'pf_ma_chuyen_nganh',$list,array('class'=>'form-control','empty'=>"Chọn Chuyên Ngành"))?>		        	
			        </div>
			        <?php echo $form->error($model,'pf_ma_chuyen_nganh')?>
			     </div>

				<div class="form-actions col-md-8" style='padding:5px;margin-top:10px'>
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary','style'=>'float:right')); ?>
				</div>
			</div>
		</div>
</div>
<?php $this->endWidget(); ?>

