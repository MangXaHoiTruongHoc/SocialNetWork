<?php
/* @var $this BangcapController */
/* @var $model Bangcap */

$this->breadcrumbs=array(
	'Bangcaps'=>array('index'),
	$model->mabangcap=>array('view','id'=>$model->mabangcap),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bangcap', 'url'=>array('index')),
	array('label'=>'Create Bangcap', 'url'=>array('create')),
	array('label'=>'View Bangcap', 'url'=>array('view', 'id'=>$model->mabangcap)),
	array('label'=>'Manage Bangcap', 'url'=>array('admin')),
);
?>

<h1>Update Bangcap <?php echo $model->mabangcap; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>