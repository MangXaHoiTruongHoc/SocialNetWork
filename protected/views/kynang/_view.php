<?php
/* @var $this KynangController */
/* @var $data Kynang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('makynang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->makynang), array('view', 'id'=>$data->makynang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kynang')); ?>:</b>
	<?php echo CHtml::encode($data->kynang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sonamkinhnghiem')); ?>:</b>
	<?php echo CHtml::encode($data->sonamkinhnghiem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mota')); ?>:</b>
	<?php echo CHtml::encode($data->mota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matk')); ?>:</b>
	<?php echo CHtml::encode($data->matk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mamucdokn')); ?>:</b>
	<?php echo CHtml::encode($data->mamucdokn); ?>
	<br />


</div>