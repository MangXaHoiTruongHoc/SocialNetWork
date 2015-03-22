<?php
/* @var $this NgoainguController */
/* @var $model Ngoaingu */

$this->breadcrumbs=array(
	'Ngoaingus'=>array('index'),
	$model->mangoaingu=>array('view','id'=>$model->mangoaingu),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ngoaingu', 'url'=>array('index')),
	array('label'=>'Create Ngoaingu', 'url'=>array('create')),
	array('label'=>'View Ngoaingu', 'url'=>array('view', 'id'=>$model->mangoaingu)),
	array('label'=>'Manage Ngoaingu', 'url'=>array('admin')),
);
?>

<h1>Update Ngoaingu <?php echo $model->mangoaingu; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>