<?php
/* @var $this MuctieunghenghiepController */
/* @var $model Muctieunghenghiep */

$this->breadcrumbs=array(
	'Muctieunghenghieps'=>array('index'),
	$model->mamuctieu=>array('view','id'=>$model->mamuctieu),
	'Update',
);

$this->menu=array(
	array('label'=>'List Muctieunghenghiep', 'url'=>array('index')),
	array('label'=>'Create Muctieunghenghiep', 'url'=>array('create')),
	array('label'=>'View Muctieunghenghiep', 'url'=>array('view', 'id'=>$model->mamuctieu)),
	array('label'=>'Manage Muctieunghenghiep', 'url'=>array('admin')),
);
?>

<h1>Update Muctieunghenghiep <?php echo $model->mamuctieu; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>