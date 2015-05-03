<?php
/* @var $this HT_TaptinController */
/* @var $model HT_Taptin */

$this->breadcrumbs=array(
	'Ht  Taptins'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List HT_Taptin', 'url'=>array('index')),
	array('label'=>'Create HT_Taptin', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ht--taptin-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ht  Taptins</h1>

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
	'id'=>'ht--taptin-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ht_ma_tap_tin',
		'ht_ma_tai_lieu',
		'ten_tap_tin',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
