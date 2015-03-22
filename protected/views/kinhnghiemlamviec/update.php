<?php
/* @var $this KinhnghiemlamviecController */
/* @var $model Kinhnghiemlamviec */

$this->breadcrumbs=array(
	'Kinhnghiemlamviecs'=>array('index'),
	$model->makinhnghiem=>array('view','id'=>$model->makinhnghiem),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kinhnghiemlamviec', 'url'=>array('index')),
	array('label'=>'Create Kinhnghiemlamviec', 'url'=>array('create')),
	array('label'=>'View Kinhnghiemlamviec', 'url'=>array('view', 'id'=>$model->makinhnghiem)),
	array('label'=>'Manage Kinhnghiemlamviec', 'url'=>array('admin')),
);
?>

<h1>Update Kinhnghiemlamviec <?php echo $model->makinhnghiem; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>