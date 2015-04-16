<?php
/* @var $this PF_GioihanController */
/* @var $model PF_Gioihan */

$this->breadcrumbs=array(
	'Pf  Gioihans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PF_Gioihan', 'url'=>array('index')),
	array('label'=>'Create PF_Gioihan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pf--gioihan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pf  Gioihans</h1>

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
	'id'=>'pf--gioihan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pf_ma_trangthai',
		'pf_tt_totnghiep',
		'pf_tt_taikhoan',
		'pf_tt_ttbs',
		'pf_tt_ngoaingu',
		'pf_tt_kynang',
		/*
		'pf_tt_hdhoctap',
		'pf_tt_hdngoaikhoa',
		'pf_tt_knlamviec',
		'pf_tt_mtnghenghiep',
		'ma_tai_khoan',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
