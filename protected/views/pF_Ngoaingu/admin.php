<?php
/* @var $this PF_NgoainguController */
/* @var $model PF_Ngoaingu */

$this->breadcrumbs=array(
	'Pf  Ngoaingus'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PF_Ngoaingu', 'url'=>array('index')),
	array('label'=>'Create PF_Ngoaingu', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pf--ngoaingu-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pf  Ngoaingus</h1>

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
	'id'=>'pf--ngoaingu-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pf_ma_ngoai_ngu',
		'pf_ten_ngoai_ngu',
		'pf_ma_muc_do_nn',
		'ma_tai_khoan',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
