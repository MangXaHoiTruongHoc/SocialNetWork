<?php
/* @var $this HT_NhomtailieuController */
/* @var $model HT_Nhomtailieu */

$this->breadcrumbs=array(
	'Ht  Nhomtailieus'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List HT_Nhomtailieu', 'url'=>array('index')),
	array('label'=>'Create HT_Nhomtailieu', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ht--nhomtailieu-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ht  Nhomtailieus</h1>

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
	'id'=>'ht--nhomtailieu-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ht_ma_nhom_tl',
		'ten_nhom_tl',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
