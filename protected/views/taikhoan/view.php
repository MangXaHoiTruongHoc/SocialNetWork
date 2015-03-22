<?php
/* @var $this TaikhoanController */
/* @var $model Taikhoan */

$this->breadcrumbs=array(
	'Taikhoans'=>array('index'),
	$model->matk,
);

$this->menu=array(
	array('label'=>'List Taikhoan', 'url'=>array('index')),
	array('label'=>'Create Taikhoan', 'url'=>array('create')),
	array('label'=>'Update Taikhoan', 'url'=>array('update', 'id'=>$model->matk)),
	array('label'=>'Delete Taikhoan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->matk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Taikhoan', 'url'=>array('admin')),
);
?>

<h1>View Taikhoan #<?php echo $model->matk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'matk',
		'email',
		'hoten',
		'ngaysinh',
		'Gioitinh',
		'avatar',
		'machuyennganh',
		'password',
	),
)); ?>
