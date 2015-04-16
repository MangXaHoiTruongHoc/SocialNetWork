<?php
/* @var $this PF_GioihanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pf  Gioihans',
);

$this->menu=array(
	array('label'=>'Create PF_Gioihan', 'url'=>array('create')),
	array('label'=>'Manage PF_Gioihan', 'url'=>array('admin')),
);
?>

<h1>Pf  Gioihans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
