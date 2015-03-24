<?php
/* @var $this PF_TotnghiepController */
/* @var $model PF_Totnghiep */

$this->breadcrumbs=array(
	'Pf  Totnghieps'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PF_Totnghiep', 'url'=>array('index')),
	array('label'=>'Create PF_Totnghiep', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pf--totnghiep-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pf  Totnghieps</h1>

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
	'id'=>'pf--totnghiep-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pf_ma_tn',
		'pf_ten_truong_tn',
		'pf_ngay_bat_dau',
		'pf_ngay_ket_thuc',
		'pf_ma_ket_qua_tn',
		'ma_tai_khoan',
		/*
		'pf_ma_chuyen_nganh',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
