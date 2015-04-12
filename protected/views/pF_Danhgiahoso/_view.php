<?php
/* @var $this PF_DanhgiahosoController */
/* @var $data PF_Danhgiahoso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_danh_gia_ho_so')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pf_ma_danh_gia_ho_so), array('view', 'id'=>$data->pf_ma_danh_gia_ho_so)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ma_tai_khoan')); ?>:</b>
	<?php echo CHtml::encode($data->ma_tai_khoan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_ky_nang')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ma_ky_nang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_hdnk')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ma_hdnk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_hdht')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ma_hdht); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_noi_dung')); ?>:</b>
	<?php echo CHtml::encode($data->pf_noi_dung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


</div>