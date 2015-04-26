<?php
/* @var $this HT_NhomtailieuController */
/* @var $model HT_Nhomtailieu */

$this->breadcrumbs=array(
	'Ht  Nhomtailieus'=>array('index'),
	$model->ht_ma_nhom_tl=>array('view','id'=>$model->ht_ma_nhom_tl),
	'Update',
);

$this->menu=array(
	array('label'=>'List HT_Nhomtailieu', 'url'=>array('index')),
	array('label'=>'Create HT_Nhomtailieu', 'url'=>array('create')),
	array('label'=>'View HT_Nhomtailieu', 'url'=>array('view', 'id'=>$model->ht_ma_nhom_tl)),
	array('label'=>'Manage HT_Nhomtailieu', 'url'=>array('admin')),
);
?>

<h1>Update HT_Nhomtailieu <?php echo $model->ht_ma_nhom_tl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>