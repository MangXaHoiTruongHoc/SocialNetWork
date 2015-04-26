<?php
/* @var $this HT_TheloaitlController */
/* @var $model HT_Theloaitl */

$this->breadcrumbs=array(
	'Ht  Theloaitls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List HT_Theloaitl', 'url'=>array('index')),
	array('label'=>'Create HT_Theloaitl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ht--theloaitl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ht  Theloaitls</h1>

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
	'id'=>'ht--theloaitl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ht_ma_the_loai',
		'ten_the_loai',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
