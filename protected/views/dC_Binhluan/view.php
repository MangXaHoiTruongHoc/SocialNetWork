<?php
/* @var $this DC_BinhluanController */
/* @var $model DC_Binhluan */

$this->breadcrumbs=array(
	'Dc  Binhluans'=>array('index'),
	$model->ma_binh_luan,
);

$this->menu=array(
	array('label'=>'List DC_Binhluan', 'url'=>array('index')),
	array('label'=>'Create DC_Binhluan', 'url'=>array('create')),
	array('label'=>'Update DC_Binhluan', 'url'=>array('update', 'id'=>$model->ma_binh_luan)),
	array('label'=>'Delete DC_Binhluan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ma_binh_luan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DC_Binhluan', 'url'=>array('admin')),
);
?>

<h1>View DC_Binhluan #<?php echo $model->ma_binh_luan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ma_binh_luan',
		'ma_tai_khoan',
		'noi_dung',
		'ht_ma_tai_lieu',
	),
)); ?>
