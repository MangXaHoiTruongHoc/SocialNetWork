<?php
/* @var $this PF_GiaithuongController */
/* @var $model PF_Giaithuong */

$this->breadcrumbs=array(
	'Pf  Giaithuongs'=>array('index'),
	$model->pf_ma_giai_thuong=>array('view','id'=>$model->pf_ma_giai_thuong),
	'Update',
);

$this->menu=array(
	array('label'=>'List PF_Giaithuong', 'url'=>array('index')),
	array('label'=>'Create PF_Giaithuong', 'url'=>array('create')),
	array('label'=>'View PF_Giaithuong', 'url'=>array('view', 'id'=>$model->pf_ma_giai_thuong)),
	array('label'=>'Manage PF_Giaithuong', 'url'=>array('admin')),
);
?>

<h1>Update PF_Giaithuong <?php echo $model->pf_ma_giai_thuong; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>