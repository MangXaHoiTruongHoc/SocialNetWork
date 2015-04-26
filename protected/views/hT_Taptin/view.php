<?php
/* @var $this HT_TaptinController */
/* @var $model HT_Taptin */

$this->breadcrumbs=array(
	'Ht  Taptins'=>array('index'),
	$model->ht_ma_tap_tin,
);

$this->menu=array(
	array('label'=>'List HT_Taptin', 'url'=>array('index')),
	array('label'=>'Create HT_Taptin', 'url'=>array('create')),
	array('label'=>'Update HT_Taptin', 'url'=>array('update', 'id'=>$model->ht_ma_tap_tin)),
	array('label'=>'Delete HT_Taptin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ht_ma_tap_tin),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HT_Taptin', 'url'=>array('admin')),
);
?>

<h1>View HT_Taptin #<?php echo $model->ht_ma_tap_tin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ht_ma_tap_tin',
		'ht_ma_tai_lieu',
		'ten_tap_tin',
	),
)); ?>
