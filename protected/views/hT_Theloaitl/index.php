<?php
/* @var $this HT_TheloaitlController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ht  Theloaitls',
);

$this->menu=array(
	array('label'=>'Create HT_Theloaitl', 'url'=>array('create')),
	array('label'=>'Manage HT_Theloaitl', 'url'=>array('admin')),
);
?>

<h1>Ht  Theloaitls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
