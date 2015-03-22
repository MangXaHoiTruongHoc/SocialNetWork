<?php
/* @var $this AnphamController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Anphams',
);

$this->menu=array(
	array('label'=>'Create Anpham', 'url'=>array('create')),
	array('label'=>'Manage Anpham', 'url'=>array('admin')),
);
?>

<h1>Anphams</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
