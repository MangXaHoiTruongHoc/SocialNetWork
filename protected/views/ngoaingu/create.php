<?php
/* @var $this NgoainguController */
/* @var $model Ngoaingu */

$this->breadcrumbs=array(
	'Ngoaingus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ngoaingu', 'url'=>array('index')),
	array('label'=>'Manage Ngoaingu', 'url'=>array('admin')),
);
?>

<h1>Create Ngoaingu</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>