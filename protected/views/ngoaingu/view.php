<?php
/* @var $this NgoainguController */
/* @var $model Ngoaingu */

$this->breadcrumbs=array(
	'Ngoaingus'=>array('index'),
	$model->mangoaingu,
);

$this->menu=array(
	array('label'=>'List Ngoaingu', 'url'=>array('index')),
	array('label'=>'Create Ngoaingu', 'url'=>array('create')),
	array('label'=>'Update Ngoaingu', 'url'=>array('update', 'id'=>$model->mangoaingu)),
	array('label'=>'Delete Ngoaingu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->mangoaingu),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ngoaingu', 'url'=>array('admin')),
);
?>

<h1>View Ngoaingu #<?php echo $model->mangoaingu; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'mangoaingu',
		'tenngoaingu',
		'mamucdonn',
		'matk',
	),
)); ?>
