<?php
/* @var $this GiaithuongController */
/* @var $model Giaithuong */

$this->breadcrumbs=array(
	'Giaithuongs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Giaithuong', 'url'=>array('index')),
	array('label'=>'Manage Giaithuong', 'url'=>array('admin')),
);
?>

<h1>Create Giaithuong</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>