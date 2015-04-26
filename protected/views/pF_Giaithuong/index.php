<?php
/* @var $this PF_GiaithuongController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pf  Giaithuongs',
);

$this->menu=array(
	array('label'=>'Create PF_Giaithuong', 'url'=>array('create')),
	array('label'=>'Manage PF_Giaithuong', 'url'=>array('admin')),
);
?>

<h1>Pf  Giaithuongs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
