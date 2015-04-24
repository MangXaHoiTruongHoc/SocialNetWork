<?php
/* @var $this SiteController */
    
    
//$matk = Taikhoan::model()->findAll(array('select'=>'ma_tai_khoan,email','condition'=>'email = "%$email%"'));
        $email = Yii::app()->session['email'];
        $matk = Yii::app()->session['ma_tai_khoan'];
        
//$this->breadcrumbs=array('About');
//get Session 
    
if(isset($email)){
$this->menu= array(
     array('label'=>'Thông tin người dùng', 'url'=>array('taikhoan/create')),
     array('label'=>'Thông tin bổ sung', 'url'=>array('pf_ttbsnguoidung/create')),
     array('label'=>'Tốt nghiệp', 'url'=>array('pf_totnghiep/create')),
     array('label'=>'Ngoại ngữ', 'url'=>array('pf_ngoaingu/create')),
     array('label'=>'Giải thưởng', 'url'=>array('pf_giaithuong/create')),
     array('label'=>'Kỹ năng', 'url'=>array('pf_kynang/create')),
     array('label'=>'Hoạt động học tập', 'url'=>array('pf_hoatdonghoctap/create')),
     array('label'=>'Hoạt động ngoại khóa', 'url'=>array('pf_hoatdongngoaikhoa/create')),
     array('label'=>'Kinh nghiệm làm việc', 'url'=>array('pf_kinhnghiemlamviec/create')),
     array('label'=>'Mục tiêu nghề nghiệp', 'url'=>array('pf_muctieunghenghiep/create')),
     ); 
        
?>

<h3 style="margin-left:10px">Thông Tin Người Dùng </h3>
<?php
    if(isset(yii::app()->session['matk2'])){
      $matk  = yii::app()->session['matk2'];
    }
    
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