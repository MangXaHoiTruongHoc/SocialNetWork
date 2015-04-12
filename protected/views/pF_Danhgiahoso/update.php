<?php
/* @var $this PF_DanhgiahosoController */
/* @var $model PF_Danhgiahoso */

$this->breadcrumbs=array(
	'Pf  Danhgiahosos'=>array('index'),
	$model->pf_ma_danh_gia_ho_so=>array('view','id'=>$model->pf_ma_danh_gia_ho_so),
	'Update',
);

$this->menu=array(
	array('label'=>'List PF_Danhgiahoso', 'url'=>array('index')),
	array('label'=>'Create PF_Danhgiahoso', 'url'=>array('create')),
	array('label'=>'View PF_Danhgiahoso', 'url'=>array('view', 'id'=>$model->pf_ma_danh_gia_ho_so)),
	array('label'=>'Manage PF_Danhgiahoso', 'url'=>array('admin')),
);
?>

<h1>Update PF_Danhgiahoso <?php echo $model->pf_ma_danh_gia_ho_so; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>