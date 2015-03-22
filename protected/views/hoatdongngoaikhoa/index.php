<?php
/* @var $this HoatdongngoaikhoaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hoatdongngoaikhoas',
);

$this->menu=array(
	array('label'=>'Create Hoatdongngoaikhoa', 'url'=>array('create')),
	array('label'=>'Manage Hoatdongngoaikhoa', 'url'=>array('admin')),
);
?>

<h1>Hoatdongngoaikhoas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
