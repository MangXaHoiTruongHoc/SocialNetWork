<?php
/* @var $this TaikhoanController */
/* @var $model Taikhoan */

$this->breadcrumbs=array(
	'Taikhoans'=>array('index'),
	$model->ma_tai_khoan=>array('view','id'=>$model->ma_tai_khoan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Taikhoan', 'url'=>array('index')),
	array('label'=>'Create Taikhoan', 'url'=>array('create')),
	array('label'=>'View Taikhoan', 'url'=>array('view', 'id'=>$model->ma_tai_khoan)),
	array('label'=>'Manage Taikhoan', 'url'=>array('admin')),
);
?>

<h1>Update Taikhoan <?php echo $model->ma_tai_khoan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>