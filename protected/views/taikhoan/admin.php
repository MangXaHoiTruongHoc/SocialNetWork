<?php
/* @var $this TaikhoanController */
/* @var $model Taikhoan */
session_start();
$this->breadcrumbs=array(
	'Taikhoans'=>array('index'),
	'Manage',
);
if(isset($_SESSION['email'])){
$this->menu=array(
	array('label'=>'List Taikhoan', 'url'=>array('index')),
	array('label'=>'Create Taikhoan', 'url'=>array('create')),
    array('label'=>'Manage About', 'url'=>array('about')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#taikhoan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Taikhoans</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'taikhoan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ma_tai_khoan',
		'email',
		'ho_ten',
		'ngay_sinh',
		'gioi_tinh',
		'hinh_dai_dien',
		/*
		'ma_chuyen_nganh',
		'mat_khau',
		'ngay_tao',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<?php
}
else{
    $this->redirect('index.php');
}
?>