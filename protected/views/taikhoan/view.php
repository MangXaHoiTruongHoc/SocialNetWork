<?php
/* @var $this TaikhoanController */
/* @var $model Taikhoan */

$this->breadcrumbs=array(
	'Taikhoans'=>array('index'),
	$model->ma_tai_khoan,
);

$this->menu=array(
	array('label'=>'List Taikhoan', 'url'=>array('index')),
	array('label'=>'Create Taikhoan', 'url'=>array('create')),
	array('label'=>'Update Taikhoan', 'url'=>array('update', 'id'=>$model->ma_tai_khoan)),
	array('label'=>'Delete Taikhoan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ma_tai_khoan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Taikhoan', 'url'=>array('admin')),
);
?>

<h1>View Taikhoan # <?php echo $model->ho_ten; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ma_tai_khoan',
         array(              
         'label'=>'Hình Đại Diện',
         'type'=>'raw',
         'value'=>CHtml::image(Yii::app()->request->baseUrl.'/upload/'.$model->hinh_dai_dien)),
		'email',
		'ho_ten',
		'ngay_sinh',
		'gioi_tinh',
		'mat_khau',
		'ngay_tao',
	),
)); ?>
