<?php
/* @var $this MuctieunghenghiepController */
/* @var $model Muctieunghenghiep */

$this->breadcrumbs=array(
	'Muctieunghenghieps'=>array('index'),
	$model->mamuctieu,
);

$this->menu=array(
	array('label'=>'List Muctieunghenghiep', 'url'=>array('index')),
	array('label'=>'Create Muctieunghenghiep', 'url'=>array('create')),
	array('label'=>'Update Muctieunghenghiep', 'url'=>array('update', 'id'=>$model->mamuctieu)),
	array('label'=>'Delete Muctieunghenghiep', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->mamuctieu),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Muctieunghenghiep', 'url'=>array('admin')),
);
?>

<h1>View Muctieunghenghiep #<?php echo $model->mamuctieu; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'mamuctieu',
		'tencongty',
		'vitri',
		'muctieu',
		'matk',
		'maloaicv',
		'matinhthanh',
	),
)); ?>
