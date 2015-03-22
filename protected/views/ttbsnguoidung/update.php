<?php
/* @var $this TtbsnguoidungController */
/* @var $model Ttbsnguoidung */

$this->breadcrumbs=array(
	'Ttbsnguoidungs'=>array('index'),
	$model->mattrnguoidung=>array('view','id'=>$model->mattrnguoidung),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ttbsnguoidung', 'url'=>array('index')),
	array('label'=>'Create Ttbsnguoidung', 'url'=>array('create')),
	array('label'=>'View Ttbsnguoidung', 'url'=>array('view', 'id'=>$model->mattrnguoidung)),
	array('label'=>'Manage Ttbsnguoidung', 'url'=>array('admin')),
);
?>

<h1>Update Ttbsnguoidung <?php echo $model->mattrnguoidung; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>