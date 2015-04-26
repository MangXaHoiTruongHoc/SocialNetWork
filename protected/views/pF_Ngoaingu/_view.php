<?php
/* @var $this PF_NgoainguController */
/* @var $data PF_Ngoaingu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_ngoai_ngu')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pf_ma_ngoai_ngu), array('view', 'id'=>$data->pf_ma_ngoai_ngu)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ten_ngoai_ngu')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ten_ngoai_ngu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_muc_do_nn')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ma_muc_do_nn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ma_tai_khoan')); ?>:</b>
	<?php echo CHtml::encode($data->ma_tai_khoan); ?>
	<br />


</div>