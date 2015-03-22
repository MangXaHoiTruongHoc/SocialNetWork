<?php
/* @var $this KynangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kynangs',
);

$this->menu=array(
	array('label'=>'Create Kynang', 'url'=>array('create')),
	array('label'=>'Manage Kynang', 'url'=>array('admin')),
);
?>

<h1>Kynangs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
