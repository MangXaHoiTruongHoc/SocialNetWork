<?php
/* @var $this HoatdongngoaikhoaController */
/* @var $model Hoatdongngoaikhoa */

$this->breadcrumbs=array(
	'Hoatdongngoaikhoas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hoatdongngoaikhoa', 'url'=>array('index')),
	array('label'=>'Manage Hoatdongngoaikhoa', 'url'=>array('admin')),
);
?>

<h1>Create Hoatdongngoaikhoa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>