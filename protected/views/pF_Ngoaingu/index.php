<?php
/* @var $this PF_NgoainguController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pf  Ngoaingus',
);

$this->menu=array(
	array('label'=>'Create PF_Ngoaingu', 'url'=>array('create')),
	array('label'=>'Manage PF_Ngoaingu', 'url'=>array('admin')),
);
?>

<h1>Pf  Ngoaingus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
