<?php
/* @var $this HT_TailieuController */
/* @var $model HT_Tailieu */

$this->breadcrumbs=array(
	'Ht  Tailieus'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List HT_Tailieu', 'url'=>array('index')),
	array('label'=>'Create HT_Tailieu', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ht--tailieu-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ht  Tailieus</h1>

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
	'id'=>'ht--tailieu-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ht_ma_tai_lieu',
		'gioi_thieu',
		'ten_tai_lieu',
		'tieu_de',
		'so_trang',
		'tac_gia',
		/*
		'nha_xuat_ban',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
