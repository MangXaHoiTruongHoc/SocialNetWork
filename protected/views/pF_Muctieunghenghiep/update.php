<?php
/* @var $this PF_MuctieunghenghiepController */
/* @var $model PF_Muctieunghenghiep */

$this->breadcrumbs=array(
	'Pf  Muctieunghenghieps'=>array('index'),
	$model->pf_ma_muc_tieu=>array('view','id'=>$model->pf_ma_muc_tieu),
	'Update',
);

$this->menu=array(
	array('label'=>'List PF_Muctieunghenghiep', 'url'=>array('index')),
	array('label'=>'Create PF_Muctieunghenghiep', 'url'=>array('create')),
	array('label'=>'View PF_Muctieunghenghiep', 'url'=>array('view', 'id'=>$model->pf_ma_muc_tieu)),
	array('label'=>'Manage PF_Muctieunghenghiep', 'url'=>array('admin')),
);
?>

<h1>Update PF_Muctieunghenghiep <?php echo $model->pf_ma_muc_tieu; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>