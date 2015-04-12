<?php
/* @var $this PF_DanhgiahosoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pf  Danhgiahosos',
);

$this->menu=array(
	array('label'=>'Create PF_Danhgiahoso', 'url'=>array('create')),
	array('label'=>'Manage PF_Danhgiahoso', 'url'=>array('admin')),
);
?>

<h1>Pf  Danhgiahosos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
