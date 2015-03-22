<?php
/* @var $this GiaithuongController */
/* @var $model Giaithuong */

$this->breadcrumbs=array(
	'Giaithuongs'=>array('index'),
	$model->magiaithuong=>array('view','id'=>$model->magiaithuong),
	'Update',
);

$this->menu=array(
	array('label'=>'List Giaithuong', 'url'=>array('index')),
	array('label'=>'Create Giaithuong', 'url'=>array('create')),
	array('label'=>'View Giaithuong', 'url'=>array('view', 'id'=>$model->magiaithuong)),
	array('label'=>'Manage Giaithuong', 'url'=>array('admin')),
);
?>

<h1>Update Giaithuong <?php echo $model->magiaithuong; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>