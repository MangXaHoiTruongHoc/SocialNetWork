<?php
/* @var $this HoatdonghoctapController */
/* @var $model Hoatdonghoctap */

$this->breadcrumbs=array(
	'Hoatdonghoctaps'=>array('index'),
	$model->mahdht=>array('view','id'=>$model->mahdht),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hoatdonghoctap', 'url'=>array('index')),
	array('label'=>'Create Hoatdonghoctap', 'url'=>array('create')),
	array('label'=>'View Hoatdonghoctap', 'url'=>array('view', 'id'=>$model->mahdht)),
	array('label'=>'Manage Hoatdonghoctap', 'url'=>array('admin')),
);
?>

<h1>Update Hoatdonghoctap <?php echo $model->mahdht; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>