<?php
/* @var $this HT_NhomtailieuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ht  Nhomtailieus',
);

$this->menu=array(
	array('label'=>'Create HT_Nhomtailieu', 'url'=>array('create')),
	array('label'=>'Manage HT_Nhomtailieu', 'url'=>array('admin')),
);
?>

<h1>Ht  Nhomtailieus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
