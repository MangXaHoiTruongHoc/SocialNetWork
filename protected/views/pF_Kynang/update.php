<?php
/* @var $this PF_KynangController */
/* @var $model PF_Kynang */

$this->breadcrumbs=array(
	'Pf  Kynangs'=>array('index'),
	$model->pf_ma_ky_nang=>array('view','id'=>$model->pf_ma_ky_nang),
	'Update',
);

$this->menu=array(
	array('label'=>'List PF_Kynang', 'url'=>array('index')),
	array('label'=>'Create PF_Kynang', 'url'=>array('create')),
	array('label'=>'View PF_Kynang', 'url'=>array('view', 'id'=>$model->pf_ma_ky_nang)),
	array('label'=>'Manage PF_Kynang', 'url'=>array('admin')),
);
?>

<h1>Update PF_Kynang <?php echo $model->pf_ma_ky_nang; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>