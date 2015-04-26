<?php
/* @var $this PF_GiaithuongController */
/* @var $data PF_Giaithuong */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_giai_thuong')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pf_ma_giai_thuong), array('view', 'id'=>$data->pf_ma_giai_thuong)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ten_giai_thuong')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ten_giai_thuong); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ngay_nhan_giai')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ngay_nhan_giai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_mo_ta')); ?>:</b>
	<?php echo CHtml::encode($data->pf_mo_ta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ma_tai_khoan')); ?>:</b>
	<?php echo CHtml::encode($data->ma_tai_khoan); ?>
	<br />


</div>