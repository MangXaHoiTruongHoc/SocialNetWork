<?php
/* @var $this PF_NgoainguController */
/* @var $model PF_Ngoaingu */

$this->breadcrumbs=array(
	'Pf  Ngoaingus'=>array('index'),
	$model->pf_ma_ngoai_ngu=>array('view','id'=>$model->pf_ma_ngoai_ngu),
	'Update',
);

$this->menu=array(
	array('label'=>'List PF_Ngoaingu', 'url'=>array('index')),
	array('label'=>'Create PF_Ngoaingu', 'url'=>array('create')),
	array('label'=>'View PF_Ngoaingu', 'url'=>array('view', 'id'=>$model->pf_ma_ngoai_ngu)),
	array('label'=>'Manage PF_Ngoaingu', 'url'=>array('admin')),
);
?>

<h1>Update PF_Ngoaingu <?php echo $model->pf_ma_ngoai_ngu; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>