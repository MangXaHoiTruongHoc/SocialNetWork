<?php
/* @var $this TtbsnguoidungController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ttbsnguoidungs',
);

$this->menu=array(
	array('label'=>'Create Ttbsnguoidung', 'url'=>array('create')),
	array('label'=>'Manage Ttbsnguoidung', 'url'=>array('admin')),
);
?>

<h1>Ttbsnguoidungs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
