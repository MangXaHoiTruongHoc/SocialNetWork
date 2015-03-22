<?php
/* @var $this KynangController */
/* @var $model Kynang */

$this->breadcrumbs=array(
	'Kynangs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kynang', 'url'=>array('index')),
	array('label'=>'Manage Kynang', 'url'=>array('admin')),
);
?>

<h1>Create Kynang</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>