<?php
/* @var $this TaikhoanController */
/* @var $model Taikhoan */

$this->breadcrumbs=array(
	'Taikhoans'=>array('index'),
	$model->matk=>array('view','id'=>$model->matk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Taikhoan', 'url'=>array('index')),
	array('label'=>'Create Taikhoan', 'url'=>array('create')),
	array('label'=>'View Taikhoan', 'url'=>array('view', 'id'=>$model->matk)),
	array('label'=>'Manage Taikhoan', 'url'=>array('admin')),
);
?>

<h1>Update Taikhoan <?php echo $model->matk; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>