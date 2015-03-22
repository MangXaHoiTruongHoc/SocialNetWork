<?php
/* @var $this HoatdonghoctapController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hoatdonghoctaps',
);

$this->menu=array(
	array('label'=>'Create Hoatdonghoctap', 'url'=>array('create')),
	array('label'=>'Manage Hoatdonghoctap', 'url'=>array('admin')),
);
?>

<h1>Hoatdonghoctaps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
