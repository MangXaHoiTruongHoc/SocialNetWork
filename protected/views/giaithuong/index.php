<?php
/* @var $this GiaithuongController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Giaithuongs',
);

$this->menu=array(
	array('label'=>'Create Giaithuong', 'url'=>array('create')),
	array('label'=>'Manage Giaithuong', 'url'=>array('admin')),
);
?>

<h1>Giaithuongs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
