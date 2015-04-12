<?php
/* @var $this PF_DanhgiahosoController */
/* @var $model PF_Danhgiahoso */

$this->breadcrumbs=array(
	'Pf  Danhgiahosos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PF_Danhgiahoso', 'url'=>array('index')),
	array('label'=>'Create PF_Danhgiahoso', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pf--danhgiahoso-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pf  Danhgiahosos</h1>

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
	'id'=>'pf--danhgiahoso-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pf_ma_danh_gia_ho_so',
		'ma_tai_khoan',
		'pf_ma_ky_nang',
		'pf_ma_hdnk',
		'pf_ma_hdht',
		'pf_noi_dung',
		/*
		'email',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
