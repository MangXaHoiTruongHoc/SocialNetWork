<?php
/* @var $this PF_GioihanController */
/* @var $data PF_Gioihan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_trangthai')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pf_ma_trangthai), array('view', 'id'=>$data->pf_ma_trangthai)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_tt_totnghiep')); ?>:</b>
	<?php echo CHtml::encode($data->pf_tt_totnghiep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_tt_taikhoan')); ?>:</b>
	<?php echo CHtml::encode($data->pf_tt_taikhoan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_tt_ttbs')); ?>:</b>
	<?php echo CHtml::encode($data->pf_tt_ttbs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_tt_ngoaingu')); ?>:</b>
	<?php echo CHtml::encode($data->pf_tt_ngoaingu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_tt_kynang')); ?>:</b>
	<?php echo CHtml::encode($data->pf_tt_kynang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_tt_hdhoctap')); ?>:</b>
	<?php echo CHtml::encode($data->pf_tt_hdhoctap); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_tt_hdngoaikhoa')); ?>:</b>
	<?php echo CHtml::encode($data->pf_tt_hdngoaikhoa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_tt_knlamviec')); ?>:</b>
	<?php echo CHtml::encode($data->pf_tt_knlamviec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_tt_mtnghenghiep')); ?>:</b>
	<?php echo CHtml::encode($data->pf_tt_mtnghenghiep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ma_tai_khoan')); ?>:</b>
	<?php echo CHtml::encode($data->ma_tai_khoan); ?>
	<br />

	*/ ?>

</div>