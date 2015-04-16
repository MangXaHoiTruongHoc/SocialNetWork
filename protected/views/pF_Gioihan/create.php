<?php
/* @var $this PF_GioihanController */
/* @var $model PF_Gioihan */

$this->breadcrumbs=array(
	'Pf  Gioihans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PF_Gioihan', 'url'=>array('index')),
	array('label'=>'Manage PF_Gioihan', 'url'=>array('admin')),
);
?>

<h1>Create PF_Gioihan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>