<?php
/* @var $this PF_MuctieunghenghiepController */
/* @var $data PF_Muctieunghenghiep */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_muc_tieu')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pf_ma_muc_tieu), array('view', 'id'=>$data->pf_ma_muc_tieu)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ten_cong_ty')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ten_cong_ty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ma_nganh_nghe')); ?>:</b>
	<?php echo CHtml::encode($data->ma_nganh_nghe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_muc_tieu')); ?>:</b>
	<?php echo CHtml::encode($data->pf_muc_tieu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ma_tai_khoan')); ?>:</b>
	<?php echo CHtml::encode($data->ma_tai_khoan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_loai_cv')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ma_loai_cv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_noi_lam_viec')); ?>:</b>
	<?php echo CHtml::encode($data->pf_noi_lam_viec); ?>
	<br />


</div>