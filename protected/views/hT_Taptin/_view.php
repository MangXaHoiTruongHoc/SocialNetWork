<?php
/* @var $this HT_TaptinController */
/* @var $data HT_Taptin */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ht_ma_tap_tin')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ht_ma_tap_tin), array('view', 'id'=>$data->ht_ma_tap_tin)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ht_ma_tai_lieu')); ?>:</b>
	<?php echo CHtml::encode($data->ht_ma_tai_lieu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ten_tap_tin')); ?>:</b>
	<?php echo CHtml::encode($data->ten_tap_tin); ?>
	<br />


</div>