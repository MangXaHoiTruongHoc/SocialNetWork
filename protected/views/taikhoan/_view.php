<?php
/* @var $this TaikhoanController */
/* @var $data Taikhoan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('matk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->matk), array('view', 'id'=>$data->matk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hoten')); ?>:</b>
	<?php echo CHtml::encode($data->hoten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ngaysinh')); ?>:</b>
	<?php echo CHtml::encode($data->ngaysinh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Gioitinh')); ?>:</b>
	<?php echo CHtml::encode($data->Gioitinh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avatar')); ?>:</b>
	<?php echo CHtml::encode($data->avatar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('machuyennganh')); ?>:</b>
	<?php echo CHtml::encode($data->machuyennganh); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	*/ ?>

</div>