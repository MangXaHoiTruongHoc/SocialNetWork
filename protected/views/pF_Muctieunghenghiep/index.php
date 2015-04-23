<?php
/* @var $this PF_MuctieunghenghiepController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pf  Muctieunghenghieps',
);

$this->menu=array(
	array('label'=>'Create PF_Muctieunghenghiep', 'url'=>array('create')),
	array('label'=>'Manage PF_Muctieunghenghiep', 'url'=>array('admin')),
);
?>

<h1>Pf  Muctieunghenghieps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
