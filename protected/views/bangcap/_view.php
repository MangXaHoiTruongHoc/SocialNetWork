<?php
/* @var $this BangcapController */
/* @var $data Bangcap */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mabangcap')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mabangcap), array('view', 'id'=>$data->mabangcap)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tenbangcap')); ?>:</b>
	<?php echo CHtml::encode($data->tenbangcap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matk')); ?>:</b>
	<?php echo CHtml::encode($data->matk); ?>
	<br />


</div>