<?php
/* @var $this PF_KinhnghiemlamviecController */
/* @var $data PF_Kinhnghiemlamviec */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_kinh_nghiem')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pf_ma_kinh_nghiem), array('view', 'id'=>$data->pf_ma_kinh_nghiem)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ten_cong_ty')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ten_cong_ty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ten_cong_viec')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ten_cong_viec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ngay_bat_dau')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ngay_bat_dau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ngay_ket_thuc')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ngay_ket_thuc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_chuc_vu')); ?>:</b>
	<?php echo CHtml::encode($data->pf_chuc_vu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_mo_ta')); ?>:</b>
	<?php echo CHtml::encode($data->pf_mo_ta); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ma_tai_khoan')); ?>:</b>
	<?php echo CHtml::encode($data->ma_tai_khoan); ?>
	<br />

	*/ ?>

</div>