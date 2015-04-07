<?php
/* @var $this PF_KynangController */
/* @var $model PF_Kynang */

$this->breadcrumbs=array(
	'Pf  Kynangs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PF_Kynang', 'url'=>array('index')),
	array('label'=>'Create PF_Kynang', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pf--kynang-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pf  Kynangs</h1>

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
	'id'=>'pf--kynang-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pf_ma_ky_nang',
		'pf_ky_nang',
		'pf_so_nam_kinh_nghiem',
		'pf_mo_ta',
		'ma_tai_khoan',
		'pf_ma_muc_do_kn',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
