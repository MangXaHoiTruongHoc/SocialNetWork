<?php
/* @var $this PF_HoatdongngoaikhoaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pf  Hoatdongngoaikhoas',
);

$this->menu=array(
	array('label'=>'Create PF_Hoatdongngoaikhoa', 'url'=>array('create')),
	array('label'=>'Manage PF_Hoatdongngoaikhoa', 'url'=>array('admin')),
);
?>

<h1>Pf  Hoatdongngoaikhoas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
