<?php
/* @var $this HT_TheloaitlController */
/* @var $model HT_Theloaitl */

$this->breadcrumbs=array(
	'Ht  Theloaitls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HT_Theloaitl', 'url'=>array('index')),
	array('label'=>'Manage HT_Theloaitl', 'url'=>array('admin')),
);
?>

<h1>Create HT_Theloaitl</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'TheloaiData'=>$TheloaiData); ?>