<?php
/* @var $this TaikhoanController */
/* @var $data Taikhoan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ma_tai_khoan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ma_tai_khoan), array('view', 'id'=>$data->ma_tai_khoan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ho_ten')); ?>:</b>
	<?php echo CHtml::encode($data->ho_ten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ngay_sinh')); ?>:</b>
	<?php echo CHtml::encode($data->ngay_sinh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gioi_tinh')); ?>:</b>
	<?php echo CHtml::encode($data->gioi_tinh); ?>
	<br />

	<b><?php echo CHtml::image(Yii::app()->request->baseUrl.'/upload/'.$data->hinh_dai_dien,
    "hinh_dai_dien",array("width"=>"50px" ,"height"=>"50px")); ?></b>
    
	<br />
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('ma_chuyen_nganh')); ?>:</b>
	<?php echo CHtml::encode($data->ma_chuyen_nganh); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mat_khau')); ?>:</b>
	<?php echo CHtml::encode($data->mat_khau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ngay_tao')); ?>:</b>
	<?php echo CHtml::encode($data->ngay_tao); ?>
	<br />

	*/ ?>

</div>