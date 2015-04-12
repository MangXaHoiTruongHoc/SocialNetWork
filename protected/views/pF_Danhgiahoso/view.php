<?php
/* @var $this PF_DanhgiahosoController */
/* @var $model PF_Danhgiahoso */

$this->breadcrumbs=array(
	'Pf  Danhgiahosos'=>array('index'),
	$model->pf_ma_danh_gia_ho_so,
);

$this->menu=array(
	array('label'=>'List PF_Danhgiahoso', 'url'=>array('index')),
	array('label'=>'Create PF_Danhgiahoso', 'url'=>array('create')),
	array('label'=>'Update PF_Danhgiahoso', 'url'=>array('update', 'id'=>$model->pf_ma_danh_gia_ho_so)),
	array('label'=>'Delete PF_Danhgiahoso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pf_ma_danh_gia_ho_so),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PF_Danhgiahoso', 'url'=>array('admin')),
);
?>

<h1>View PF_Danhgiahoso #<?php echo $model->pf_ma_danh_gia_ho_so; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pf_ma_danh_gia_ho_so',
		'ma_tai_khoan',
		'pf_ma_ky_nang',
		'pf_ma_hdnk',
		'pf_ma_hdht',
		'pf_noi_dung',
		'email',
	),
)); ?>
