<?php
/* @var $this DC_BinhluanController */
/* @var $model DC_Binhluan */

$this->breadcrumbs=array(
	'Dc  Binhluans'=>array('index'),
	$model->ma_binh_luan=>array('view','id'=>$model->ma_binh_luan),
	'Update',
);

$this->menu=array(
	array('label'=>'List DC_Binhluan', 'url'=>array('index')),
	array('label'=>'Create DC_Binhluan', 'url'=>array('create')),
	array('label'=>'View DC_Binhluan', 'url'=>array('view', 'id'=>$model->ma_binh_luan)),
	array('label'=>'Manage DC_Binhluan', 'url'=>array('admin')),
);
?>

<h1>Update DC_Binhluan <?php echo $model->ma_binh_luan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>