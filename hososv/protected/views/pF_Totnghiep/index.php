<?php
/* @var $this PF_TotnghiepController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pf  Totnghieps',
);

$this->menu=array(
	array('label'=>'Create PF_Totnghiep', 'url'=>array('create')),
	array('label'=>'Manage PF_Totnghiep', 'url'=>array('admin')),
);
?>

<h1>Pf  Totnghieps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
