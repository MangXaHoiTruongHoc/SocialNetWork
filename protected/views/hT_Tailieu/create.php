<?php
/* @var $this HT_TailieuController */
/* @var $model HT_Tailieu */

$this->breadcrumbs=array(
	'Ht  Tailieus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Danh Mục Tài Liệu', 'url'=>array('index')),
	array('label'=>'Manage HT_Tailieu', 'url'=>array('admin')),
);
?>

<h1>UPLOAD TÀI LIỆU</h1>
<?php
        
       
            $this->renderPartial('_form', array('model'=>$model));
        
?>
