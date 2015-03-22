<?php
/* @var $this MuctieunghenghiepController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Muctieunghenghieps',
);

$this->menu=array(
	array('label'=>'Create Muctieunghenghiep', 'url'=>array('create')),
	array('label'=>'Manage Muctieunghenghiep', 'url'=>array('admin')),
);
?>

<h1>Muctieunghenghieps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
