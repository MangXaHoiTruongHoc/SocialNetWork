<?php
/* @var $this HT_TailieuController */
/* @var $model HT_Tailieu */

$this->breadcrumbs=array(
	'Ht  Tailieus'=>array('index'),
	$model->ht_ma_tai_lieu=>array('view','id'=>$model->ht_ma_tai_lieu),
	'Update',
);

$this->menu=array(
	array('label'=>'List HT_Tailieu', 'url'=>array('index')),
	array('label'=>'Create HT_Tailieu', 'url'=>array('index')),
	array('label'=>'View HT_Tailieu', 'url'=>array('view', 'id'=>$model->ht_ma_tai_lieu)),
	array('label'=>'Manage HT_Tailieu', 'url'=>array('admin')),
);
?>

<h1>Update HT_Tailieu <?php echo $model->ht_ma_tai_lieu; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>