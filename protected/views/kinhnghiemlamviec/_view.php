<?php
/* @var $this KinhnghiemlamviecController */
/* @var $data Kinhnghiemlamviec */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('makinhnghiem')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->makinhnghiem), array('view', 'id'=>$data->makinhnghiem)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tencongty')); ?>:</b>
	<?php echo CHtml::encode($data->tencongty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tencongviec')); ?>:</b>
	<?php echo CHtml::encode($data->tencongviec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ngaybatdau')); ?>:</b>
	<?php echo CHtml::encode($data->ngaybatdau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ngayketthuc')); ?>:</b>
	<?php echo CHtml::encode($data->ngayketthuc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chucvu')); ?>:</b>
	<?php echo CHtml::encode($data->chucvu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mota')); ?>:</b>
	<?php echo CHtml::encode($data->mota); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('matk')); ?>:</b>
	<?php echo CHtml::encode($data->matk); ?>
	<br />

	*/ ?>

</div>