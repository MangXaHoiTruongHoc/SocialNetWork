<?php
/* @var $this TaikhoanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Taikhoans',
);

$this->menu=array(
	array('label'=>'Create Taikhoan', 'url'=>array('create')),
	array('label'=>'Manage Taikhoan', 'url'=>array('admin')),
);
?>

<h1>Taikhoans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
