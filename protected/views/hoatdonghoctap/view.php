<?php
/* @var $this HoatdonghoctapController */
/* @var $model Hoatdonghoctap */

$this->breadcrumbs=array(
	'Hoatdonghoctaps'=>array('index'),
	$model->mahdht,
);

$this->menu=array(
	array('label'=>'List Hoatdonghoctap', 'url'=>array('index')),
	array('label'=>'Create Hoatdonghoctap', 'url'=>array('create')),
	array('label'=>'Update Hoatdonghoctap', 'url'=>array('update', 'id'=>$model->mahdht)),
	array('label'=>'Delete Hoatdonghoctap', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->mahdht),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hoatdonghoctap', 'url'=>array('admin')),
);
?>

<h1>View Hoatdonghoctap #<?php echo $model->mahdht; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'mahdht',
		'tenhoatdong',
		'ngaybatdau',
		'ngayketthuc',
		'mota',
		'vaitro',
		'matk',
	),
)); ?>
