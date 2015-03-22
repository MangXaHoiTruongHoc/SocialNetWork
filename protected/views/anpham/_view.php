<?php
/* @var $this AnphamController */
/* @var $data Anpham */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('maanpham')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->maanpham), array('view', 'id'=>$data->maanpham)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tenanpham')); ?>:</b>
	<?php echo CHtml::encode($data->tenanpham); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ngayanhanh')); ?>:</b>
	<?php echo CHtml::encode($data->ngayanhanh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mota')); ?>:</b>
	<?php echo CHtml::encode($data->mota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matk')); ?>:</b>
	<?php echo CHtml::encode($data->matk); ?>
	<br />


</div>