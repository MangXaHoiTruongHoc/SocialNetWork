<?php
/* @var $this HoatdongngoaikhoaController */
/* @var $model Hoatdongngoaikhoa */

$this->breadcrumbs=array(
	'Hoatdongngoaikhoas'=>array('index'),
	$model->mahdnk,
);

$this->menu=array(
	array('label'=>'List Hoatdongngoaikhoa', 'url'=>array('index')),
	array('label'=>'Create Hoatdongngoaikhoa', 'url'=>array('create')),
	array('label'=>'Update Hoatdongngoaikhoa', 'url'=>array('update', 'id'=>$model->mahdnk)),
	array('label'=>'Delete Hoatdongngoaikhoa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->mahdnk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hoatdongngoaikhoa', 'url'=>array('admin')),
);
?>

<h1>View Hoatdongngoaikhoa #<?php echo $model->mahdnk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'mahdnk',
		'tenhoatdong',
		'ngaybatdau',
		'ngayketthuc',
		'vaitro',
		'mota',
		'matk',
	),
)); ?>
