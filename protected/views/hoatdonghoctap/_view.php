<?php
/* @var $this HoatdonghoctapController */
/* @var $data Hoatdonghoctap */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mahdht')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mahdht), array('view', 'id'=>$data->mahdht)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tenhoatdong')); ?>:</b>
	<?php echo CHtml::encode($data->tenhoatdong); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ngaybatdau')); ?>:</b>
	<?php echo CHtml::encode($data->ngaybatdau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ngayketthuc')); ?>:</b>
	<?php echo CHtml::encode($data->ngayketthuc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mota')); ?>:</b>
	<?php echo CHtml::encode($data->mota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vaitro')); ?>:</b>
	<?php echo CHtml::encode($data->vaitro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matk')); ?>:</b>
	<?php echo CHtml::encode($data->matk); ?>
	<br />


</div>