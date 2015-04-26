<?php
/* @var $this HT_TheloaitlController */
/* @var $data HT_Theloaitl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ht_ma_the_loai')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ht_ma_the_loai), array('view', 'id'=>$data->ht_ma_the_loai)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ten_the_loai')); ?>:</b>
	<?php echo CHtml::encode($data->ten_the_loai); ?>
	<br />


</div>