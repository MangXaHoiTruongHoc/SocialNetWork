<?php
/* @var $this KinhnghiemlamviecController */
/* @var $model Kinhnghiemlamviec */

$this->breadcrumbs=array(
	'Kinhnghiemlamviecs'=>array('index'),
	$model->makinhnghiem,
);

$this->menu=array(
	array('label'=>'List Kinhnghiemlamviec', 'url'=>array('index')),
	array('label'=>'Create Kinhnghiemlamviec', 'url'=>array('create')),
	array('label'=>'Update Kinhnghiemlamviec', 'url'=>array('update', 'id'=>$model->makinhnghiem)),
	array('label'=>'Delete Kinhnghiemlamviec', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->makinhnghiem),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kinhnghiemlamviec', 'url'=>array('admin')),
);
?>

<h1>View Kinhnghiemlamviec #<?php echo $model->makinhnghiem; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'makinhnghiem',
		'tencongty',
		'tencongviec',
		'ngaybatdau',
		'ngayketthuc',
		'chucvu',
		'mota',
		'matk',
	),
)); ?>
