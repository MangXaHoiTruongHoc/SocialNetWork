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
         // Kiểm tra matk người xem.
        if(isset(yii::app()->session['matk2'])){
              $matk = yii::app()->session['matk2'];
            }
        $matn = PF_Totnghiep::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk));
       // print_r($matn); die;
        foreach($matn as $k){
            
        }
        // Thực hiện lấy mã tốt nghiệp
      //  $matn = PF_Totnghiep::model()->findAll(array('condition'=>'ma_tai_khoan = :matk','params'=>array(':matk'=>$matk)));
       // $count = count($matn);
                 
   //Loadmenu              
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
      <?php
        $gioihan = PF_Gioihan::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk));
        foreach ($gioihan as $g ) {
          $tt_tn = $g->pf_tt_totnghiep;
        }
      ?>
      <h3   style="margin-left:10px">Tốt nghiệp
      <?php
        if(!isset(yii::app()->session['matk2'])){
      ?>  
        <div class="make-switch" data-on="success" data-off="default" style="float:right">
          <input id="<?php echo ($matk)?>"   class='gioihan' type="checkbox" name="tt_totnghiep"  value="<?php echo $tt_tn; ?>" <?php echo $tt_tn == 1 ? "checked": ""; ?> > 
          <!-- <input class='gioihan make-switch' data-on="success" data-off="default" style="float:right" type="checkbox" name="tt_totnghiep" id="<?php echo (yii::app()->session['ma_tai_khoan'])?>" value="<?php echo $tt_tn; ?>" > -->
        </div>  
      <?php
      }
      ?>  
      </h3>
      

<?php
        if($tt_tn==0){// kiểm tra checkbox đc check chưa.
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
        }else{
          if(!isset(yii::app()->session['matk2'])){
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
          else{
            echo "<h4 style='margin-left:10px'>Bạn phải liên hệ với chủ hồ sơ để được xem thông tin. Cảm ơn!!!</h4>";
          }
        }
?>
        

<?php 
    // Lấy đúng trường tốt nghiệp theo id đã set.
    $tn  = yii::app()->session['pf_ma_tn'];
    $totnghiep = PF_Totnghiep::model()->findAllByAttributes(array('pf_ma_tn'=>$tn));
    foreach($totnghiep as $t){
                   $model->pf_ma_tn =  $t->pf_ma_tn;
                   $model->pf_ten_truong_tn = $t->pf_ten_truong_tn;
                   $model->pf_ngay_bat_dau = $t->pf_ngay_bat_dau;
                   $model->pf_ngay_ket_thuc = $t->pf_ngay_ket_thuc;
                   $model->pf_ma_chuyen_nganh = $t->pf_ma_chuyen_nganh;
                   $model->pf_ma_ket_qua_tn= $t->pf_ma_ket_qua_tn;
                   
                 }
    if(empty($temp)){// kiểm tra trường hợp update để set lại form
    $model->unsetAttributes();// set lại model
    }
    if(!isset(yii::app()->session['matk2'])){  
    $this->renderPartial('_form', array('model'=>$model));
    }
 ?>
 