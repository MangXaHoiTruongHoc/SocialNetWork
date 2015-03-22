<?php
/* @var $this KynangController */
/* @var $model Kynang */

$this->breadcrumbs=array(
	'Kynangs'=>array('index'),
	$model->makynang,
);

$this->menu=array(
	array('label'=>'List Kynang', 'url'=>array('index')),
	array('label'=>'Create Kynang', 'url'=>array('create')),
	array('label'=>'Update Kynang', 'url'=>array('update', 'id'=>$model->makynang)),
	array('label'=>'Delete Kynang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->makynang),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kynang', 'url'=>array('admin')),
);
?>

<h1>View Kynang #<?php echo $model->makynang; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'makynang',
		'kynang',
		'sonamkinhnghiem',
		'mota',
		'matk',
		'mamucdokn',
	),
)); ?>
