<?php
/* @var $this BangcapController */
/* @var $model Bangcap */

$this->breadcrumbs=array(
	'Bangcaps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bangcap', 'url'=>array('index')),
	array('label'=>'Manage Bangcap', 'url'=>array('admin')),
);
?>

<h1>Create Bangcap</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>