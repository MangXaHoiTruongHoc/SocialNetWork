<?php
/* @var $this NgoainguController */
/* @var $data Ngoaingu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mangoaingu')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mangoaingu), array('view', 'id'=>$data->mangoaingu)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tenngoaingu')); ?>:</b>
	<?php echo CHtml::encode($data->tenngoaingu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mamucdonn')); ?>:</b>
	<?php echo CHtml::encode($data->mamucdonn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matk')); ?>:</b>
	<?php echo CHtml::encode($data->matk); ?>
	<br />


</div>