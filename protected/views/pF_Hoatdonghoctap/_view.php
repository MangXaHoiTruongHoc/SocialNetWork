<?php
/* @var $this PF_HoatdonghoctapController */
/* @var $data PF_Hoatdonghoctap */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_hdht')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pf_ma_hdht), array('view', 'id'=>$data->pf_ma_hdht)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ten_hoat_dong')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ten_hoat_dong); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ngay_bat_dau')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ngay_bat_dau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ngay_ket_thuc')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ngay_ket_thuc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_mo_ta')); ?>:</b>
	<?php echo CHtml::encode($data->pf_mo_ta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_vai_tro')); ?>:</b>
	<?php echo CHtml::encode($data->pf_vai_tro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ma_tai_khoan')); ?>:</b>
	<?php echo CHtml::encode($data->ma_tai_khoan); ?>
	<br />


</div>