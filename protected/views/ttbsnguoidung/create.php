<?php
/* @var $this TtbsnguoidungController */
/* @var $model Ttbsnguoidung */

$this->breadcrumbs=array(
	'Ttbsnguoidungs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ttbsnguoidung', 'url'=>array('index')),
	array('label'=>'Manage Ttbsnguoidung', 'url'=>array('admin')),
);
?>

<h1>Create Ttbsnguoidung</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>