<?php
/* @var $this PF_HoatdonghoctapController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pf  Hoatdonghoctaps',
);

$this->menu=array(
	array('label'=>'Create PF_Hoatdonghoctap', 'url'=>array('create')),
	array('label'=>'Manage PF_Hoatdonghoctap', 'url'=>array('admin')),
);
?>

<h1>Pf  Hoatdonghoctaps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
