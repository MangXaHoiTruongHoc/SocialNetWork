<?php
/* @var $this PF_TotnghiepController */
/* @var $model PF_Totnghiep */
/* @var $form CActiveForm */
?>

<div class="form">
    
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
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); 
    
?>
    
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_ten_truong_tn'); ?>
		<?php echo $form->textField($model,'pf_ten_truong_tn',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'pf_ten_truong_tn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_ngay_bat_dau'); ?>
		<?php echo $form->dateField($model,'pf_ngay_bat_dau',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pf_ngay_bat_dau'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pf_ngay_ket_thuc'); ?>
		<?php echo $form->dateField($model,'pf_ngay_ket_thuc',array('size'=>10,'maxlength'=>10)); ?>
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
	<div class="row">
		<?php echo $form->labelEx($model,'pf_ma_ket_qua_tn'); ?>
		<?php echo $form->dropDownList($model,'pf_ma_ket_qua_tn',$list,array('empty'=>"Chọn kết quả")); ?>
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
	<div class="row">
		<?php echo $form->labelEx($model,'pf_ma_chuyen_nganh'); ?>
		<?php echo $form->dropDownList($model,'pf_ma_chuyen_nganh',$listcn,array('empty'=>"Chọn Chuyên Ngành")); ?>
		<?php echo $form->error($model,'pf_ma_chuyen_nganh'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<!--<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
,array('onclick'=>'sendSubmit();')
<script type="text/javascript">
function sendSubmit() {
    
  var data=$("#totnghiep-form").serialize();
  $.ajax({
    type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("PF_Totnghiep/create"); ?>',
    data:data,
    success:function(data){
      alert("Thêm Thành Công");
    },
    error: function(data) { // if error occured
      alert("Error occured.please try again");
    },
  });
}
</script>-->