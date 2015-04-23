<?php
/* @var $this PF_KinhnghiemlamviecController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pf  Kinhnghiemlamviecs',
);

$this->menu=array(
	array('label'=>'Create PF_Kinhnghiemlamviec', 'url'=>array('create')),
	array('label'=>'Manage PF_Kinhnghiemlamviec', 'url'=>array('admin')),
);
?>

<h1>Pf  Kinhnghiemlamviecs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
