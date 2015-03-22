<?php
/* @var $this HoatdongngoaikhoaController */
/* @var $model Hoatdongngoaikhoa */

$this->breadcrumbs=array(
	'Hoatdongngoaikhoas'=>array('index'),
	$model->mahdnk=>array('view','id'=>$model->mahdnk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hoatdongngoaikhoa', 'url'=>array('index')),
	array('label'=>'Create Hoatdongngoaikhoa', 'url'=>array('create')),
	array('label'=>'View Hoatdongngoaikhoa', 'url'=>array('view', 'id'=>$model->mahdnk)),
	array('label'=>'Manage Hoatdongngoaikhoa', 'url'=>array('admin')),
);
?>

<h1>Update Hoatdongngoaikhoa <?php echo $model->mahdnk; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>