<?php
/* @var $this PF_HoatdonghoctapController */
/* @var $model PF_Hoatdonghoctap */

$this->breadcrumbs=array(
	'Pf  Hoatdonghoctaps'=>array('index'),
	$model->pf_ma_hdht=>array('view','id'=>$model->pf_ma_hdht),
	'Update',
);

$this->menu=array(
	array('label'=>'List PF_Hoatdonghoctap', 'url'=>array('index')),
	array('label'=>'Create PF_Hoatdonghoctap', 'url'=>array('create')),
	array('label'=>'View PF_Hoatdonghoctap', 'url'=>array('view', 'id'=>$model->pf_ma_hdht)),
	array('label'=>'Manage PF_Hoatdonghoctap', 'url'=>array('admin')),
);
?>

<h1>Update PF_Hoatdonghoctap <?php echo $model->pf_ma_hdht; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>