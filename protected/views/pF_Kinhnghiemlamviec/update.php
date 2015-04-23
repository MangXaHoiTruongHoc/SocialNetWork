<?php
/* @var $this PF_KinhnghiemlamviecController */
/* @var $model PF_Kinhnghiemlamviec */

$this->breadcrumbs=array(
	'Pf  Kinhnghiemlamviecs'=>array('index'),
	$model->pf_ma_kinh_nghiem=>array('view','id'=>$model->pf_ma_kinh_nghiem),
	'Update',
);

$this->menu=array(
	array('label'=>'List PF_Kinhnghiemlamviec', 'url'=>array('index')),
	array('label'=>'Create PF_Kinhnghiemlamviec', 'url'=>array('create')),
	array('label'=>'View PF_Kinhnghiemlamviec', 'url'=>array('view', 'id'=>$model->pf_ma_kinh_nghiem)),
	array('label'=>'Manage PF_Kinhnghiemlamviec', 'url'=>array('admin')),
);
?>

<h1>Update PF_Kinhnghiemlamviec <?php echo $model->pf_ma_kinh_nghiem; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>