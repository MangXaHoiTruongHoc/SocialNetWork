<?php
/* @var $this TtbsnguoidungController */
/* @var $model Ttbsnguoidung */

$this->breadcrumbs=array(
	'Ttbsnguoidungs'=>array('index'),
	$model->mattrnguoidung,
);

$this->menu=array(
	array('label'=>'List Ttbsnguoidung', 'url'=>array('index')),
	array('label'=>'Create Ttbsnguoidung', 'url'=>array('create')),
	array('label'=>'Update Ttbsnguoidung', 'url'=>array('update', 'id'=>$model->mattrnguoidung)),
	array('label'=>'Delete Ttbsnguoidung', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->mattrnguoidung),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ttbsnguoidung', 'url'=>array('admin')),
);
?>

<h1>View Ttbsnguoidung #<?php echo $model->mattrnguoidung; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'mattrnguoidung',
		'dantoc',
		'quoctich',
		'sothich',
		'tongiao',
		'slogan',
		'matk',
	),
)); ?>
