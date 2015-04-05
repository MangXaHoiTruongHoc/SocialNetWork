<?php
/* @var $this PF_TotnghiepController */
/* @var $model PF_Totnghiep */

$this->breadcrumbs=array(
	'Pf  Totnghieps'=>array('index'),
	$model->pf_ma_tn=>array('view','id'=>$model->pf_ma_tn),
	'Update',
);

$this->menu=array(
	array('label'=>'List PF_Totnghiep', 'url'=>array('index')),
	array('label'=>'Create PF_Totnghiep', 'url'=>array('create')),
	array('label'=>'View PF_Totnghiep', 'url'=>array('view', 'id'=>$model->pf_ma_tn)),
	array('label'=>'Manage PF_Totnghiep', 'url'=>array('admin')),
);
?>

<h1>Update PF_Totnghiep <?php echo $model->pf_ma_tn; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>