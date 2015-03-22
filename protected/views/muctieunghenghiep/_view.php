<?php
/* @var $this MuctieunghenghiepController */
/* @var $data Muctieunghenghiep */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mamuctieu')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mamuctieu), array('view', 'id'=>$data->mamuctieu)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tencongty')); ?>:</b>
	<?php echo CHtml::encode($data->tencongty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vitri')); ?>:</b>
	<?php echo CHtml::encode($data->vitri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('muctieu')); ?>:</b>
	<?php echo CHtml::encode($data->muctieu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matk')); ?>:</b>
	<?php echo CHtml::encode($data->matk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maloaicv')); ?>:</b>
	<?php echo CHtml::encode($data->maloaicv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matinhthanh')); ?>:</b>
	<?php echo CHtml::encode($data->matinhthanh); ?>
	<br />


</div>