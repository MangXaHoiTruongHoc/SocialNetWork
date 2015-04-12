<?php
/* @var $this PF_DanhgiahosoController */
/* @var $model PF_Danhgiahoso */

$this->breadcrumbs=array(
	'Pf  Danhgiahosos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PF_Danhgiahoso', 'url'=>array('index')),
	array('label'=>'Manage PF_Danhgiahoso', 'url'=>array('admin')),
);
?>

<h1>Create PF_Danhgiahoso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>