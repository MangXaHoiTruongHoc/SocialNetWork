<?php
/* @var $this AnphamController */
/* @var $model Anpham */

$this->breadcrumbs=array(
	'Anphams'=>array('index'),
	$model->maanpham,
);

$this->menu=array(
	array('label'=>'List Anpham', 'url'=>array('index')),
	array('label'=>'Create Anpham', 'url'=>array('create')),
	array('label'=>'Update Anpham', 'url'=>array('update', 'id'=>$model->maanpham)),
	array('label'=>'Delete Anpham', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->maanpham),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Anpham', 'url'=>array('admin')),
);
?>

<h1>View Anpham #<?php echo $model->maanpham; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'maanpham',
		'tenanpham',
		'ngayanhanh',
		'url',
		'mota',
		'matk',
	),
)); ?>
