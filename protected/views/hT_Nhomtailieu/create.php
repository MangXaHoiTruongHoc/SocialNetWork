<?php
/* @var $this HT_NhomtailieuController */
/* @var $model HT_Nhomtailieu */

$this->breadcrumbs=array(
	'Ht  Nhomtailieus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HT_Nhomtailieu', 'url'=>array('index')),
	array('label'=>'Manage HT_Nhomtailieu', 'url'=>array('admin')),
);
?>

<h1>Create HT_Nhomtailieu</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>