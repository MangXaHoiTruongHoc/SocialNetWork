<?php
/* @var $this HT_TheloaitlController */
/* @var $model HT_Theloaitl */

$this->breadcrumbs=array(
	'Ht  Theloaitls'=>array('index'),
	$model->ht_ma_the_loai,
);

$this->menu=array(
	array('label'=>'List HT_Theloaitl', 'url'=>array('index')),
	array('label'=>'Create HT_Theloaitl', 'url'=>array('create')),
	array('label'=>'Update HT_Theloaitl', 'url'=>array('update', 'id'=>$model->ht_ma_the_loai)),
	array('label'=>'Delete HT_Theloaitl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ht_ma_the_loai),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HT_Theloaitl', 'url'=>array('admin')),
);
?>

<h1>View HT_Theloaitl #<?php echo $model->ht_ma_the_loai; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ht_ma_the_loai',
		'ten_the_loai',
	),
)); ?>
