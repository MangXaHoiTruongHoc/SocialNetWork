<?php
/* @var $this MuctieunghenghiepController */
/* @var $model Muctieunghenghiep */

$this->breadcrumbs=array(
	'Muctieunghenghieps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Muctieunghenghiep', 'url'=>array('index')),
	array('label'=>'Manage Muctieunghenghiep', 'url'=>array('admin')),
);
?>

<h1>Create Muctieunghenghiep</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>