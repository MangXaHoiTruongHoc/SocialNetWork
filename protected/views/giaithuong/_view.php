<?php
/* @var $this GiaithuongController */
/* @var $data Giaithuong */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('magiaithuong')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->magiaithuong), array('view', 'id'=>$data->magiaithuong)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tengiaithuong')); ?>:</b>
	<?php echo CHtml::encode($data->tengiaithuong); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ngaynhangiai')); ?>:</b>
	<?php echo CHtml::encode($data->ngaynhangiai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mota')); ?>:</b>
	<?php echo CHtml::encode($data->mota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matk')); ?>:</b>
	<?php echo CHtml::encode($data->matk); ?>
	<br />


</div>