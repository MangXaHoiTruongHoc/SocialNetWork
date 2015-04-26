<?php
/* @var $this PF_MuctieunghenghiepController */
/* @var $model PF_Muctieunghenghiep */

$this->breadcrumbs=array(
	'Pf  Muctieunghenghieps'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PF_Muctieunghenghiep', 'url'=>array('index')),
	array('label'=>'Create PF_Muctieunghenghiep', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pf--muctieunghenghiep-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pf  Muctieunghenghieps</h1>

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
	'id'=>'pf--muctieunghenghiep-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pf_ma_muc_tieu',
		'pf_ten_cong_ty',
		'ma_vi_tri',
		'pf_muc_tieu',
		'ma_tai_khoan',
		'pf_ma_loai_cv',
		/*
		'pf_noi_lam_viec',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
