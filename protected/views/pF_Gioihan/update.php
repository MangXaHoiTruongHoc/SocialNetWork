<?php
/* @var $this PF_GioihanController */
/* @var $model PF_Gioihan */

$this->breadcrumbs=array(
	'Pf  Gioihans'=>array('index'),
	$model->pf_ma_trangthai=>array('view','id'=>$model->pf_ma_trangthai),
	'Update',
);

$this->menu=array(
	array('label'=>'List PF_Gioihan', 'url'=>array('index')),
	array('label'=>'Create PF_Gioihan', 'url'=>array('create')),
	array('label'=>'View PF_Gioihan', 'url'=>array('view', 'id'=>$model->pf_ma_trangthai)),
	array('label'=>'Manage PF_Gioihan', 'url'=>array('admin')),
);
?>

<h1>Update PF_Gioihan <?php echo $model->pf_ma_trangthai; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>