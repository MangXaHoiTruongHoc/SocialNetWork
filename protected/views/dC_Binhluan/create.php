<?php
/* @var $this DC_BinhluanController */
/* @var $model DC_Binhluan */

$this->breadcrumbs=array(
	'Dc  Binhluans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DC_Binhluan', 'url'=>array('index')),
	array('label'=>'Manage DC_Binhluan', 'url'=>array('admin')),
);
?>

<h1>Create DC_Binhluan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>