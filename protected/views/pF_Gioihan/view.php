<?php
/* @var $this PF_GioihanController */
/* @var $model PF_Gioihan */

$this->breadcrumbs=array(
	'Pf  Gioihans'=>array('index'),
	$model->pf_ma_trangthai,
);

$this->menu=array(
	array('label'=>'List PF_Gioihan', 'url'=>array('index')),
	array('label'=>'Create PF_Gioihan', 'url'=>array('create')),
	array('label'=>'Update PF_Gioihan', 'url'=>array('update', 'id'=>$model->pf_ma_trangthai)),
	array('label'=>'Delete PF_Gioihan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pf_ma_trangthai),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PF_Gioihan', 'url'=>array('admin')),
);
?>

<h1>View PF_Gioihan #<?php echo $model->pf_ma_trangthai; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pf_ma_trangthai',
		'pf_tt_totnghiep',
		'pf_tt_taikhoan',
		'pf_tt_ttbs',
		'pf_tt_ngoaingu',
		'pf_tt_kynang',
		'pf_tt_hdhoctap',
		'pf_tt_hdngoaikhoa',
		'pf_tt_knlamviec',
		'pf_tt_mtnghenghiep',
		'ma_tai_khoan',
	),
)); ?>
