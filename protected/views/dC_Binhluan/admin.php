<?php
/* @var $this DC_BinhluanController */
/* @var $model DC_Binhluan */

$this->breadcrumbs=array(
	'Dc  Binhluans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DC_Binhluan', 'url'=>array('index')),
	array('label'=>'Create DC_Binhluan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dc--binhluan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Dc  Binhluans</h1>

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
	'id'=>'dc--binhluan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ma_binh_luan',
		'ma_tai_khoan',
		'noi_dung',
		'ht_ma_tai_lieu',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
