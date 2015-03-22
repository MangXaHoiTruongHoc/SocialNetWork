<?php
/* @var $this AnphamController */
/* @var $model Anpham */

$this->breadcrumbs=array(
	'Anphams'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Anpham', 'url'=>array('index')),
	array('label'=>'Manage Anpham', 'url'=>array('admin')),
);
?>

<h1>Create Anpham</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>