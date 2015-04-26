<?php
/* @var $this HT_TheloaitlController */
/* @var $model HT_Theloaitl */

$this->breadcrumbs=array(
	'Ht  Theloaitls'=>array('index'),
	$model->ht_ma_the_loai=>array('view','id'=>$model->ht_ma_the_loai),
	'Update',
);

$this->menu=array(
	array('label'=>'List HT_Theloaitl', 'url'=>array('index')),
	array('label'=>'Create HT_Theloaitl', 'url'=>array('create')),
	array('label'=>'View HT_Theloaitl', 'url'=>array('view', 'id'=>$model->ht_ma_the_loai)),
	array('label'=>'Manage HT_Theloaitl', 'url'=>array('admin')),
);
?>

<h1>Update HT_Theloaitl <?php echo $model->ht_ma_the_loai; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>