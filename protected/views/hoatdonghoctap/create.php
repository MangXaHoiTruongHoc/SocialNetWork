<?php
/* @var $this HoatdonghoctapController */
/* @var $model Hoatdonghoctap */

$this->breadcrumbs=array(
	'Hoatdonghoctaps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hoatdonghoctap', 'url'=>array('index')),
	array('label'=>'Manage Hoatdonghoctap', 'url'=>array('admin')),
);
?>

<h1>Create Hoatdonghoctap</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>