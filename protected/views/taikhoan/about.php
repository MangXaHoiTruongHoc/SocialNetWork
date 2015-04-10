<?php
/* @var $this SiteController */
    
    
//$matk = Taikhoan::model()->findAll(array('select'=>'ma_tai_khoan,email','condition'=>'email = "%$email%"'));
        $email = Yii::app()->session['email'];
        $matk = Yii::app()->session['ma_tai_khoan'];
       
//$this->breadcrumbs=array('About');
//get Session 
    
if(isset($email)){
     $this->menu= array(
     array('label'=>'Thông Tin Người Dùng', 'url'=>array('taikhoan/create' )),
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
   $this->renderPartial('view',array('id'=>$matk,'model'=>$model));
  // $data = new PF_Ttbsnguoidung;
  // $this->renderPartial('//pf_ttbsnguoidung/create',array('matk'=>$matk,'model'=>$model));
   
?>
    
<?php
}
else{
    $this->redirect(array('login'));
}
?>