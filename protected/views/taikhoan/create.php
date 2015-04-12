<?php
/* @var $this TaikhoanController */
/* @var $model Taikhoan */
    $matk = Yii::app()->session['ma_tai_khoan'];
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
         
         
        
    
?>
<?php
            $ttbs = Taikhoan::model()->findAll(array('condition'=>'ma_tai_khoan = :matk',
        'params'=>array(':matk' => $matk)));
        foreach($ttbs as $k){
           
      
            $model->ma_tai_khoan = $k->ma_tai_khoan;
            $model->email = $k->email;
            $model->ho_ten = $k->ho_ten;
            $model->ngay_sinh = $k->ngay_sinh;
            $model->gioi_tinh = $k->gioi_tinh;
            $model->hinh_dai_dien = $k->hinh_dai_dien;
         
        }
        // Render qua trang view
        if(isset($model->ma_tai_khoan)){
        $this->renderPartial('view',array('model'=>$model));
        }

?>


<?php

if(!isset($model->ma_tai_khoan)){
 echo "<h1' >Create Taikhoan</h1>";
$this->renderPartial('_form', array('model'=>$model));
}
if(!empty($temp)){
    $this->renderPartial('_form', array('model'=>$model));
} 
?>