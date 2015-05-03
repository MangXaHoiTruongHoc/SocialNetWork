<?php
/* @var $this HT_TaptinController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ht  Taptins',
);

$this->menu=array(
	array('label'=>'Create HT_Taptin', 'url'=>array('create')),
	array('label'=>'Manage HT_Taptin', 'url'=>array('admin')),
);
?>

<h1>Ht  Taptins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
