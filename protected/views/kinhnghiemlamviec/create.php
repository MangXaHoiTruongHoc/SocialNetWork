<?php
/* @var $this KinhnghiemlamviecController */
/* @var $model Kinhnghiemlamviec */

$this->breadcrumbs=array(
	'Kinhnghiemlamviecs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kinhnghiemlamviec', 'url'=>array('index')),
	array('label'=>'Manage Kinhnghiemlamviec', 'url'=>array('admin')),
);
?>

<h1>Create Kinhnghiemlamviec</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>