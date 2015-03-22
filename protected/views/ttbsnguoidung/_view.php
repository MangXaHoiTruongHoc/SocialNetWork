<?php
/* @var $this TtbsnguoidungController */
/* @var $data Ttbsnguoidung */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mattrnguoidung')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mattrnguoidung), array('view', 'id'=>$data->mattrnguoidung)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dantoc')); ?>:</b>
	<?php echo CHtml::encode($data->dantoc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quoctich')); ?>:</b>
	<?php echo CHtml::encode($data->quoctich); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sothich')); ?>:</b>
	<?php echo CHtml::encode($data->sothich); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tongiao')); ?>:</b>
	<?php echo CHtml::encode($data->tongiao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slogan')); ?>:</b>
	<?php echo CHtml::encode($data->slogan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matk')); ?>:</b>
	<?php echo CHtml::encode($data->matk); ?>
	<br />


</div>