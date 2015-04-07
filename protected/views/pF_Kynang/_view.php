<?php
/* @var $this PF_KynangController */
/* @var $data PF_Kynang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_ky_nang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pf_ma_ky_nang), array('view', 'id'=>$data->pf_ma_ky_nang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ky_nang')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ky_nang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_so_nam_kinh_nghiem')); ?>:</b>
	<?php echo CHtml::encode($data->pf_so_nam_kinh_nghiem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_mo_ta')); ?>:</b>
	<?php echo CHtml::encode($data->pf_mo_ta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ma_tai_khoan')); ?>:</b>
	<?php echo CHtml::encode($data->ma_tai_khoan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_muc_do_kn')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ma_muc_do_kn); ?>
	<br />


</div>