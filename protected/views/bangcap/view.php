<?php
/* @var $this BangcapController */
/* @var $model Bangcap */

$this->breadcrumbs=array(
	'Bangcaps'=>array('index'),
	$model->mabangcap,
);

$this->menu=array(
	array('label'=>'List Bangcap', 'url'=>array('index')),
	array('label'=>'Create Bangcap', 'url'=>array('create')),
	array('label'=>'Update Bangcap', 'url'=>array('update', 'id'=>$model->mabangcap)),
	array('label'=>'Delete Bangcap', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->mabangcap),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bangcap', 'url'=>array('admin')),
);
?>

<h1>View Bangcap #<?php echo $model->mabangcap; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'mabangcap',
		'tenbangcap',
		'matk',
	),
)); ?>
