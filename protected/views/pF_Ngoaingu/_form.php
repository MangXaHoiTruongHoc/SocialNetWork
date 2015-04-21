<?php
/* @var $this PF_NgoainguController */
/* @var $model PF_Ngoaingu */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pf--ngoaingu-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'htmlOptions'=>array('class'=>'form-horizontal margin-none','autocomplete'=>'off'),
	'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
	
)); ?>
<div class="widget">
	<div class="widget-head">
        <?php
		if($model->isNewRecord){
			echo "<h3 class='heading'>Thêm Ngoại Ngữ</h3>";
		}else{
			echo "<h3 class='heading'>Cập Nhật Ngoại Ngữ</h3>";
		}
		?>
    </div>	
		<div class="widget-body innerAll inner-2x">
			<div class="row innerLR">
				<div class="form-group">
					<?php echo $form->labelEx($model,'pf_ten_ngoai_ngu',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6'>
					<?php echo $form->dropDownList($model,'pf_ten_ngoai_ngu',
					array('Tiếng anh'=>'Tiếng anh','Tiếng nhật'=>'Tiếng nhật','Tiếng pháp'=>'Tiếng pháp',
						  'Tiếng trung'=>'Tiếng trung','Tiếng nga'=>'Tiếng nga','Tiếng tây ban nha'=>'Tiếng tây ban nha',
						  'Tiếng thái'=>'Tiếng thái','Tiếng lào'=>'Tiếng lào','Khác'=>'Khác'),
					array('class'=>'form-control','empty'=>'Chọn Ngoại Ngữ')); ?>
					</div>
					<?php echo $form->error($model,'pf_ten_ngoai_ngu'); ?>
				</div>
				<?php
				$mucdo = PF_Mucdongoaingu::model()->findall();
				$list = array();
				foreach ($mucdo as $key ) {
					$list[$key->pf_ma_muc_do_nn] = $key->pf_muc_do;
				}
				?>	
				<div class="form-group">
					<?php echo $form->labelEx($model,'pf_ma_muc_do_nn',array('class'=>'col-md-4 control-label')); ?>
					<div class='col-md-6'>
					<?php echo $form->dropDownList($model,'pf_ma_muc_do_nn',$list,array('class'=>'form-control','empty'=>'Chọn mức độ')); ?>
					</div>
					<?php echo $form->error($model,'pf_ma_muc_do_nn'); ?>
				</div>
				<div class="form-actions col-md-8">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary','style'=>'float:right')); ?>
				</div>
			</div>	
		</div>
</div>
<?php $this->endWidget(); ?>

