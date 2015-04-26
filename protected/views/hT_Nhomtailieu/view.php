<?php
/* @var $this HT_NhomtailieuController */
/* @var $model HT_Nhomtailieu */

$this->breadcrumbs=array(
	'Ht  Nhomtailieus'=>array('index'),
	$model->ht_ma_nhom_tl,
);

$this->menu=array(
	array('label'=>'List HT_Nhomtailieu', 'url'=>array('index')),
	array('label'=>'Create HT_Nhomtailieu', 'url'=>array('create')),
	array('label'=>'Update HT_Nhomtailieu', 'url'=>array('update', 'id'=>$model->ht_ma_nhom_tl)),
	array('label'=>'Delete HT_Nhomtailieu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ht_ma_nhom_tl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HT_Nhomtailieu', 'url'=>array('admin')),
);
?>

<h1>View HT_Nhomtailieu #<?php echo $model->ht_ma_nhom_tl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ht_ma_nhom_tl',
		'ten_nhom_tl',
	),
)); ?>
