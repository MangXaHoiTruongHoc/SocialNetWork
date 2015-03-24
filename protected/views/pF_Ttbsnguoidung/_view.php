<?php
/* @var $this PF_TtbsnguoidungController */
/* @var $data PF_Ttbsnguoidung */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_ttr_nguoi_dung')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pf_ma_ttr_nguoi_dung), array('view', 'id'=>$data->pf_ma_ttr_nguoi_dung)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_dan_toc')); ?>:</b>
	<?php echo CHtml::encode($data->pf_dan_toc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_quoc_tich')); ?>:</b>
	<?php echo CHtml::encode($data->pf_quoc_tich); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_so_thich')); ?>:</b>
	<?php echo CHtml::encode($data->pf_so_thich); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ton_giao')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ton_giao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_slogan')); ?>:</b>
	<?php echo CHtml::encode($data->pf_slogan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ma_tai_khoan')); ?>:</b>
	<?php echo CHtml::encode($data->ma_tai_khoan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pf_ma_chuyen_nganh')); ?>:</b>
	<?php echo CHtml::encode($data->pf_ma_chuyen_nganh); ?>
	<br />
    
	*/ 
    ?>
     <b><?php echo CHtml::textField('chuyennganh',$data->pf_ma_chuyen_nganh);?></b> 

</div>