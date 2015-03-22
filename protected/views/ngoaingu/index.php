<?php
/* @var $this NgoainguController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ngoaingus',
);

$this->menu=array(
	array('label'=>'Create Ngoaingu', 'url'=>array('create')),
	array('label'=>'Manage Ngoaingu', 'url'=>array('admin')),
);
?>

<h1>Ngoaingus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
