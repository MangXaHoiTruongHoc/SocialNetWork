<?php
/* @var $this TaikhoanController */
/* @var $model Taikhoan */

$this->breadcrumbs=array(
	'Taikhoans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Taikhoan', 'url'=>array('index')),
	array('label'=>'Manage Taikhoan', 'url'=>array('admin')),
    array('label'=>'Manage About', 'url'=>array('about')),
);
?>

<h1>Create Taikhoan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>