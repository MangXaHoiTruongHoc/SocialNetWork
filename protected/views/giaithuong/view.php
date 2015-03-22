<?php
/* @var $this GiaithuongController */
/* @var $model Giaithuong */

$this->breadcrumbs=array(
	'Giaithuongs'=>array('index'),
	$model->magiaithuong,
);

$this->menu=array(
	array('label'=>'List Giaithuong', 'url'=>array('index')),
	array('label'=>'Create Giaithuong', 'url'=>array('create')),
	array('label'=>'Update Giaithuong', 'url'=>array('update', 'id'=>$model->magiaithuong)),
	array('label'=>'Delete Giaithuong', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->magiaithuong),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Giaithuong', 'url'=>array('admin')),
);
?>

<h1>View Giaithuong #<?php echo $model->magiaithuong; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'magiaithuong',
		'tengiaithuong',
		'ngaynhangiai',
		'mota',
		'matk',
	),
)); ?>
