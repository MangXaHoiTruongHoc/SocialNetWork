<?php
/* @var $this KynangController */
/* @var $model Kynang */

$this->breadcrumbs=array(
	'Kynangs'=>array('index'),
	$model->makynang=>array('view','id'=>$model->makynang),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kynang', 'url'=>array('index')),
	array('label'=>'Create Kynang', 'url'=>array('create')),
	array('label'=>'View Kynang', 'url'=>array('view', 'id'=>$model->makynang)),
	array('label'=>'Manage Kynang', 'url'=>array('admin')),
);
?>

<h1>Update Kynang <?php echo $model->makynang; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>