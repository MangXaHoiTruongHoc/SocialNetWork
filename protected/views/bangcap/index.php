<?php
/* @var $this BangcapController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bangcaps',
);

$this->menu=array(
	array('label'=>'Create Bangcap', 'url'=>array('create')),
	array('label'=>'Manage Bangcap', 'url'=>array('admin')),
);
?>

<h1>Bangcaps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
