<?php
/* @var $this PF_TotnghiepController */
/* @var $data PF_Totnghiep */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_tn')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pf_ma_tn), array('view', 'id'=>$data->pf_ma_tn)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ten_truong_tn')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ten_truong_tn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ngay_bat_dau')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ngay_bat_dau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ngay_ket_thuc')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ngay_ket_thuc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_ket_qua_tn')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ma_ket_qua_tn); ?>
	<br />
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('ma_tai_khoan')); ?>:</b>
	<?php echo CHtml::encode($data->ma_tai_khoan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_chuyen_nganh')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ma_chuyen_nganh); ?>
	<br />
    


</div>