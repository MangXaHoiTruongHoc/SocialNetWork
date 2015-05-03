<?php
/* @var $this DC_BinhluanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dc  Binhluans',
);

$this->menu=array(
	array('label'=>'Create DC_Binhluan', 'url'=>array('create')),
	array('label'=>'Manage DC_Binhluan', 'url'=>array('admin')),
);
?>

<h1>Dc  Binhluans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
