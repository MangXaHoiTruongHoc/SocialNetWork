<?php
/* @var $this HT_TaptinController */
/* @var $model HT_Taptin */

$this->breadcrumbs=array(
	'Ht  Taptins'=>array('index'),
	$model->ht_ma_tap_tin=>array('view','id'=>$model->ht_ma_tap_tin),
	'Update',
);

$this->menu=array(
	array('label'=>'List HT_Taptin', 'url'=>array('index')),
	array('label'=>'Create HT_Taptin', 'url'=>array('create')),
	array('label'=>'View HT_Taptin', 'url'=>array('view', 'id'=>$model->ht_ma_tap_tin)),
	array('label'=>'Manage HT_Taptin', 'url'=>array('admin')),
);
?>

<h1>Update HT_Taptin <?php echo $model->ht_ma_tap_tin; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>