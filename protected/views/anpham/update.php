<?php
/* @var $this AnphamController */
/* @var $model Anpham */

$this->breadcrumbs=array(
	'Anphams'=>array('index'),
	$model->maanpham=>array('view','id'=>$model->maanpham),
	'Update',
);

$this->menu=array(
	array('label'=>'List Anpham', 'url'=>array('index')),
	array('label'=>'Create Anpham', 'url'=>array('create')),
	array('label'=>'View Anpham', 'url'=>array('view', 'id'=>$model->maanpham)),
	array('label'=>'Manage Anpham', 'url'=>array('admin')),
);
?>

<h1>Update Anpham <?php echo $model->maanpham; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>