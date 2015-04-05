<?php
/* @var $this PF_TtbsnguoidungController */
/* @var $model PF_Ttbsnguoidung */

$this->breadcrumbs=array(
	'Pf  Ttbsnguoidungs'=>array('index'),
	$model->pf_ma_ttr_nguoi_dung=>array('view','id'=>$model->pf_ma_ttr_nguoi_dung),
	'Update',
);

$this->menu=array(
	array('label'=>'List PF_Ttbsnguoidung', 'url'=>array('index')),
	array('label'=>'Create PF_Ttbsnguoidung', 'url'=>array('create')),
	array('label'=>'View PF_Ttbsnguoidung', 'url'=>array('view', 'id'=>$model->pf_ma_ttr_nguoi_dung)),
	array('label'=>'Manage PF_Ttbsnguoidung', 'url'=>array('admin')),
);
?>

<h1>Update PF_Ttbsnguoidung <?php echo $model->pf_ma_ttr_nguoi_dung; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>