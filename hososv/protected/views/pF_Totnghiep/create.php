<?php
/* @var $this PF_TotnghiepController */
/* @var $model PF_Totnghiep */
//
//$this->breadcrumbs=array(
//	'Pf  Totnghieps'=>array('index'),
//	'Create',
//);    
        //echo Yii::app()->createAbsoluteUrl("PF_Totnghiep/create");
        //die;
        $matk = yii::app()->session['ma_tai_khoan'];
        $matn = PF_Totnghiep::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk));
       // print_r($matn); die;
        foreach($matn as $k){
            
        }
        // Thực hiện lấy mã tốt nghiệp
      //  $matn = PF_Totnghiep::model()->findAll(array('condition'=>'ma_tai_khoan = :matk','params'=>array(':matk'=>$matk)));
        $count = count($matn);
                 
   //Loadmenu              
$this->menu= array(
     array('label'=>'Thông Tin Người Dùng', 'url'=>array('taikhoan/view','id'=> $matk )),
     array('label'=>'Thông Tin Bổ Sung', 'url'=>array('pf_ttbsnguoidung/create')),
     array('label'=>'Tốt Nghiệp', 'url'=>array('pf_totnghiep/create')),
     array('label'=>'Ngoại Ngữ', 'url'=>array('#')),
     array('label'=>'Kỹ Năng', 'url'=>array('#')),
     array('label'=>'Hoạt Động Học Tập', 'url'=>array('#')),
     array('label'=>'Hoạt Động Ngoại Khóa', 'url'=>array('#')),
     array('label'=>'Kinh Nghiệm Làm Việc', 'url'=>array('#')),
     array('label'=>'Mục Tiêu Nghề Nghiệp', 'url'=>array('#')),
     );
    
?>
<h1>Tốt Nghiệp</h1>
<?php
        
        if(isset($k->pf_ma_tn )){   
        foreach($matn as $l){
                   $model->pf_ma_tn =  $l->pf_ma_tn;
                   $model->pf_ten_truong_tn = $l->pf_ten_truong_tn;
                   $model->pf_ngay_bat_dau = $l->pf_ngay_bat_dau;
                   $model->pf_ngay_ket_thuc = $l->pf_ngay_ket_thuc;
                   $model->pf_ma_chuyen_nganh = $l->pf_ma_chuyen_nganh;
                   $model->pf_ma_ket_qua_tn= $l->pf_ma_ket_qua_tn;
                   $this->renderPartial('view',array('model'=>$model));
                 }
        
           
        }
?>
        
<h1>Thêm Trường Tốt Nghiệp</h1>
<?php 
    if(empty($temp)){// kiểm tra trường hợp update để set lại form
    $model->unsetAttributes();// set lại model
    }
    $this->renderPartial('_form', array('model'=>$model));
 ?>