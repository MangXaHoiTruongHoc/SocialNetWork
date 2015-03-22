<?php
$this->breadcrumbs=array(
	'Taikhoans'=>array('index'),
	'About',
);
$this->menu = array(
    array('label'=>'List Taikhoan', 'url'=>array('index')),
	array('label'=>'Manage Taikhoan', 'url'=>array('admin')),
    array('label'=>'Manage About', 'url'=>array('about')),
);
?>
<h1>Hi every body</h1>
<?php
$this->renderPartial('_about',array('model'=>$model));
?>