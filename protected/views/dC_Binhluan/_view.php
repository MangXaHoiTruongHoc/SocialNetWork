<?php
/* @var $this DC_BinhluanController */
/* @var $data DC_Binhluan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ma_binh_luan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ma_binh_luan), array('view', 'id'=>$data->ma_binh_luan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ma_tai_khoan')); ?>:</b>
	<?php echo CHtml::encode($data->ma_tai_khoan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noi_dung')); ?>:</b>
	<?php echo CHtml::encode($data->noi_dung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ht_ma_tai_lieu')); ?>:</b>
	<?php echo CHtml::encode($data->ht_ma_tai_lieu); ?>
	<br />


</div>