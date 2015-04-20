<?php
/* @var $this PF_HoatdongngoaikhoaController */
/* @var $model PF_Hoatdongngoaikhoa */

$this->breadcrumbs=array(
	'Pf  Hoatdongngoaikhoas'=>array('index'),
	$model->pf_ma_hdnk=>array('view','id'=>$model->pf_ma_hdnk),
	'Update',
);

$this->menu=array(
	array('label'=>'List PF_Hoatdongngoaikhoa', 'url'=>array('index')),
	array('label'=>'Create PF_Hoatdongngoaikhoa', 'url'=>array('create')),
	array('label'=>'View PF_Hoatdongngoaikhoa', 'url'=>array('view', 'id'=>$model->pf_ma_hdnk)),
	array('label'=>'Manage PF_Hoatdongngoaikhoa', 'url'=>array('admin')),
);
?>

<h1>Update PF_Hoatdongngoaikhoa <?php echo $model->pf_ma_hdnk; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>