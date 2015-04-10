<?php
/* @var $this PF_KynangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pf  Kynangs',
);

$this->menu=array(
	array('label'=>'Create PF_Kynang', 'url'=>array('create')),
	array('label'=>'Manage PF_Kynang', 'url'=>array('admin')),
);
?>

<h1>Pf  Kynangs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
