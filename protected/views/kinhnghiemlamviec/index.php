<?php
/* @var $this KinhnghiemlamviecController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kinhnghiemlamviecs',
);

$this->menu=array(
	array('label'=>'Create Kinhnghiemlamviec', 'url'=>array('create')),
	array('label'=>'Manage Kinhnghiemlamviec', 'url'=>array('admin')),
);
?>

<h1>Kinhnghiemlamviecs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
