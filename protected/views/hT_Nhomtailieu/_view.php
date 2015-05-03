<?php
/* @var $this HT_NhomtailieuController */
/* @var $data HT_Nhomtailieu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ht_ma_nhom_tl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ht_ma_nhom_tl), array('view', 'id'=>$data->ht_ma_nhom_tl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ten_nhom_tl')); ?>:</b>
	<?php echo CHtml::encode($data->ten_nhom_tl); ?>
	<br />


</div>