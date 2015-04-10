<?php
/* @var $this TaikhoanController */
/* @var $model Taikhoan */
    $matk= yii::app()->session['ma_tai_khoan'];
//$this->breadcrumbs=array(
//	'Taikhoans'=>array('index'),
//	$model->ma_tai_khoan,
//);

//$this->menu=array(
	//array('label'=>'List Taikhoan', 'url'=>array('index')),
	//array('label'=>'Create Taikhoan', 'url'=>array('create')),
	//array('label'=>'Update Taikhoan', 'url'=>array('update', 'id'=>$model->ma_tai_khoan)),
    //array('label'=>'Delete Taikhoan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ma_tai_khoan),'confirm'=>'Are you sure you want to delete this item?')),
  $this->menu= array(
     array('label'=>'Thông Tin Người Dùng', 'url'=>array('taikhoan/create')),
     array('label'=>'Thông Tin Bổ Sung', 'url'=>array('pf_ttbsnguoidung/create')),
     array('label'=>'Tốt Nghiệp', 'url'=>array('pf_totnghiep/create')),
     array('label'=>'Ngoại Ngữ', 'url'=>array('#')),
     array('label'=>'Kỹ Năng', 'url'=>array('pf_kynang/create')),
     array('label'=>'Hoạt Động Học Tập', 'url'=>array('#')),
     array('label'=>'Hoạt Động Ngoại Khóa', 'url'=>array('#')),
      array('label'=>'Kinh Nghiệm Làm Việc', 'url'=>array('#')),
      array('label'=>'Mục Tiêu Nghề Nghiệp', 'url'=>array('#')),
     );	
    //<?php echo $model->ho_ten; 

?>

<h1>Thông Tin Người Dùng </h1>
<p style='text-align:right'><a href='index.php?r=taikhoan/update&id=<?php echo($model->ma_tai_khoan)?>'>Edit</a>  
<?php 

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'ma_tai_khoan',
         array(              
         'label'=>'Hình Đại Diện',
         'type'=>'raw',
         'value'=>CHtml::image(Yii::app()->request->baseUrl.'/upload/'.$model->hinh_dai_dien)),
		'email',
		'ho_ten',
		'ngay_sinh',
		'gioi_tinh',
		//'mat_khau',
	   	//'ngay_tao',
	),
)); ?>
