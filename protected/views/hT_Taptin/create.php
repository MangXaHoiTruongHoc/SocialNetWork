<?php
/* @var $this HT_TaptinController */
/* @var $model HT_Taptin */

$this->breadcrumbs=array(
	'Ht  Taptins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HT_Taptin', 'url'=>array('index')),
	array('label'=>'Manage HT_Taptin', 'url'=>array('admin')),
);
?>

<h1>Create HT_Taptin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>