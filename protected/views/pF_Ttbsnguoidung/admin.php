<?php
/* @var $this PF_TtbsnguoidungController */
/* @var $model PF_Ttbsnguoidung */

$this->breadcrumbs=array(
	'Pf  Ttbsnguoidungs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PF_Ttbsnguoidung', 'url'=>array('index')),
	array('label'=>'Create PF_Ttbsnguoidung', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pf--ttbsnguoidung-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pf  Ttbsnguoidungs</h1>

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
	'id'=>'pf--ttbsnguoidung-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pf_ma_ttr_nguoi_dung',
		'pf_dan_toc',
		'pf_quoc_tich',
		'pf_so_thich',
		'pf_ton_giao',
		'pf_slogan',
		/*
		'ma_tai_khoan',
		'pf_ma_chuyen_nganh',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
