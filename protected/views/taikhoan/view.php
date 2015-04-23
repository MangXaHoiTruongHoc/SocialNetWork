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
     array('label'=>'Thông tin người dùng', 'url'=>array('taikhoan/create')),
     array('label'=>'Thông tin bổ sung', 'url'=>array('pf_ttbsnguoidung/create')),
     array('label'=>'Tốt nghiệp', 'url'=>array('pf_totnghiep/create')),
     array('label'=>'Ngoại ngữ', 'url'=>array('pf_ngoaingu/create')),
     array('label'=>'Kỹ năng', 'url'=>array('pf_kynang/create')),
     array('label'=>'Hoạt động học tập', 'url'=>array('pf_hoatdonghoctap/create')),
     array('label'=>'Hoạt động ngoại khóa', 'url'=>array('pf_hoatdongngoaikhoa/create')),
     array('label'=>'Kinh nghiệm làm việc', 'url'=>array('pf_kinhnghiemlamviec/create')),
     array('label'=>'Mục tiêu nghề nghiệp', 'url'=>array('pf_muctieunghenghiep/create')),
     );
    //<?php echo $model->ho_ten; 
  // Kiểm tra session để ẩn hiện re_up
    if(isset(yii::app()->session['matk2'])){
            Yii::app()->clientScript->registerScript('re_up',"
             $('.re_up').css({'display':'none'});
            ");
    }
?>



<?php 

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'ma_tai_khoan',
         array(              
         'label'=>'Hình Đại Diện',
         'type'=>'raw',
         'value'=>CHtml::image(Yii::app()->request->baseUrl.'/upload/'.$model->hinh_dai_dien,'',array(
            'style'=>'width:70px!important;height:70px!important'
            )).
         "<div class='re_up' style='float:right'><a href='index.php?r=taikhoan/update&id=$model->ma_tai_khoan'>Edit</a> </div>
          "),
		'email',
		'ho_ten',
		'ngay_sinh',
		'gioi_tinh',
		//'mat_khau',
	   	//'ngay_tao',
	),
)); ?>
