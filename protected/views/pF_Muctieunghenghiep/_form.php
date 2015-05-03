<?php
/* @var $this PF_MuctieunghenghiepController */
/* @var $model PF_Muctieunghenghiep */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pf--muctieunghenghiep-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('class'=>'form-horizontal margin-none','autocomplete'=>'off','enctype' =>'multipart/form-data')
)); ?>
<div class="widget">
	<div class="widget-head">
		<?php
		if($model->isNewRecord){
			echo "<h3 class='heading'>Thêm mục tiêu nghề nghiệp</h3>";
		}else{
			echo "<h3 class='heading'>Cập nhật mục tiêu nghề nghiệp</h3>";
		}
		?>
	    </div>	
			<div class="widget-body innerAll inner-2x">
				<div class="row innerLR">

					<div class="form-group">
						<?php echo $form->labelEx($model,'pf_ten_cong_ty',array('class'=>'col-md-4 control-label')); ?>
						<div class="col-md-6">		
						<?php echo $form->textField($model,'pf_ten_cong_ty',array('class'=>'form-control','size'=>50,'maxlength'=>50)); ?>
						</div>
						<?php echo $form->error($model,'pf_ten_cong_ty'); ?>
					</div>
					<?php
					$nganhnghe = DC_Nganhnghe::model()->findAll();
					$listnn= array();
					foreach ($nganhnghe as $lnn ) {
						$listnn[$lnn->ma_nganh_nghe] = $lnn->ten_nganh_nghe;
					}
					?>
					<div class="form-group">
						<?php echo $form->labelEx($model,'ma_nganh_nghe',array('class'=>'col-md-4 control-label')); ?>
						<div class="col-md-6">
						<?php echo $form->dropDownList($model,'ma_nganh_nghe',$listnn,array('style'=>'width:293.438px;height:32px','class'=>'select2_6_2','empty'=>'Chọn ngành nghề')); ?>
						</div>
						<?php echo $form->error($model,'ma_nganh_nghe'); ?>
					</div>

					<div class="form-group">
						<?php echo $form->labelEx($model,'pf_muc_tieu',array('class'=>'col-md-4 control-label')); ?>
						<div class="col-md-6">
						<?php echo $form->textArea($model,'pf_muc_tieu',array('class'=>'form-control','rows'=>6, 'cols'=>50)); ?>
						</div>
						<?php echo $form->error($model,'pf_muc_tieu'); ?>
					</div>
					<?php
					$loaicv = PF_Loaicongviec::model()->findAll();
					$list= array();
					foreach ($loaicv as $l ) {
						$list[$l->pf_ma_loai_cv] = $l->pf_ten_loai_cv;
					}
					?>
					<div class="form-group">
						<?php echo $form->labelEx($model,'pf_ma_loai_cv',array('class'=>'col-md-4 control-label')); ?>
						<div class="col-md-6">
						<?php echo $form->dropDownList($model,'pf_ma_loai_cv',$list,array('style'=>'width:293.438px;height:32px','class'=>'select2_6_2','empty'=>'Chọn loại công việc')); ?>
						</div>
						<?php echo $form->error($model,'pf_ma_loai_cv'); ?>
					</div>
					<?php
					$tinhthanh = DC_Tinhthanh::model()->findAll();
					$list1= array();
					foreach ($tinhthanh as $l ) {
						$list1[$l->ma_tinh_thanh] = $l->ten_tinh_thanh;
					}
					?>
					<div class="form-group">
						<?php echo $form->labelEx($model,'pf_noi_lam_viec',array('class'=>'col-md-4 control-label')); ?>
						<div class="col-md-6">
						<?php
							$this->widget('ext.select2.ESelect2',array(
							  'name'=>'noilamviec',
							  'data'=>$list1,
							//  'atribute'=>'ten_tinh_thanh',
							  'htmlOptions'=>array(
							  'multiple'=>'multiple',
							  'class'=>'select2_6_2',
							  'style'=>'width:293.438px;height:32px',
							  ),
							));
						?>	
						</div>
						<?php echo $form->error($model,'pf_noi_lam_viec'); ?>
					</div>
					
					<div class="form-actions col-md-8">
						<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary','style'=>'float:right')); ?>
					</div>
			</div>
		</div>
</div><!-- form -->
<?php $this->endWidget(); ?>

    								