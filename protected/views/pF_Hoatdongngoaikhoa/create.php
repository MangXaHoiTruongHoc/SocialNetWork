<?php
/* @var $this PF_HoatdongngoaikhoaController */
/* @var $model PF_Hoatdongngoaikhoa */
 $matk = Yii::app()->session['ma_tai_khoan'];
   // Kiểm tra matk người xem.
    if(isset(yii::app()->session['matk2'])){
            $matk = yii::app()->session['matk2'];
    }    
$this->menu= array(
     array('label'=>'Thông tin người dùng', 'url'=>array('taikhoan/create')),
     array('label'=>'Thông tin bổ sung', 'url'=>array('pf_ttbsnguoidung/create')),
     array('label'=>'Tốt nghiệp', 'url'=>array('pf_totnghiep/create')),
     array('label'=>'Ngoại ngữ', 'url'=>array('#')),
     array('label'=>'Kỹ năng', 'url'=>array('pf_kynang/create')),
     array('label'=>'Hoạt động học tập', 'url'=>array('#')),
     array('label'=>'Hoạt động ngoại khóa', 'url'=>array('pf_hoatdongngoaikhoa/create')),
   array('label'=>'Kinh nghiệm làm việc', 'url'=>array('#')),
     array('label'=>'Mục tiêu nghề nghiệp', 'url'=>array('#')),
     );   
?>
<h3 style="margin-left:10px">Hoạt động ngoại khóa
<?php
      // lấy giới hạn kỹ năng
        $gioihan1 = PF_Gioihan::model()->findAllByAttributes(array('ma_tai_khoan'=> $matk));
        foreach ($gioihan1 as $g ) {
          $tt_hdnk = $g->pf_tt_hdngoaikhoa;
        }
      // Kiểm tra session nguoi xem de ẩn checkbox
      if(!isset(yii::app()->session['matk2'])){
      ?>  
      <div class="make-switch" data-on="success" data-off="default" style="float:right">
      <input id="<?php echo ($matk)?>"   class='gioihan4' type="checkbox" name="tt_kynang"  value="<?php echo $tt_hdnk; ?>" <?php echo $tt_hdnk == 1 ? "checked": ""; ?> > 
      </div>  
      <?php
      }
      ?>
</h3>
<?php   
        
        // Lấy thông tin hoạt động ngoại khóa
        $tthdnk = PF_Hoatdongngoaikhoa::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk)); 
        if($tt_hdnk==0){// kiểm tra checkbox đc check chưa.
    //kiểm tra giá trị hdnk để hiện thị view
          if(isset($tthdnk)){
             foreach($tthdnk as $k){
                 $model->pf_ma_hdnk = $k->pf_ma_hdnk;
                 $model->ma_tai_khoan = $k->ma_tai_khoan;
                 $model->pf_ten_hoat_dong = $k->pf_ten_hoat_dong;
                 $model->pf_ngay_bat_dau = $k->pf_ngay_bat_dau;
                 $model->pf_ngay_ket_thuc = $k->pf_ngay_ket_thuc;
                 $model->pf_vai_tro = $k->pf_vai_tro;
                 $model->pf_mo_ta = $k->pf_mo_ta;
                 $this->renderPartial('view',array('model'=>$model));
                 echo "<h3></h3>"; 
             }
             }
        }else{
          if(!isset(yii::app()->session['matk2'])){
               if(isset($tthdnk)){
                  foreach($tthdnk as $k){
                      $model->pf_ma_hdnk = $k->pf_ma_hdnk;
                      $model->ma_tai_khoan = $k->ma_tai_khoan;
                      $model->pf_ten_hoat_dong = $k->pf_ten_hoat_dong;
                      $model->pf_ngay_bat_dau = $k->pf_ngay_bat_dau;
                      $model->pf_ngay_ket_thuc = $k->pf_ngay_ket_thuc;
                      $model->pf_vai_tro = $k->pf_vai_tro;
                      $model->pf_mo_ta = $k->pf_mo_ta;
                      $this->renderPartial('view',array('model'=>$model));
                      echo "<h3></h3>"; 
                  }
               }
          }else{
                echo "<h4 style='margin-left:10px'>Bạn phải liên hệ với chủ hồ sơ để được xem thông tin. Cảm ơn!!!</h4>";
          }
        }
        
        
?>
<?php
     $mahdnk = yii::app()->session['pf_ma_hdnk'];
     
     if(isset($temp)){
        $model->unsetAttributes();
        
        $hdnk1 = PF_Hoatdongngoaikhoa::model()->findAllByAttributes(array('pf_ma_hdnk'=> $mahdnk));
          foreach($hdnk1 as $k1){
            $model->pf_ma_hdnk = $k1->pf_ma_hdnk;
            $model->pf_ten_hoat_dong = $k1->pf_ten_hoat_dong;
            $model->pf_ngay_bat_dau = $k1->pf_ngay_bat_dau;
            $model->pf_ngay_ket_thuc = $k1->pf_ngay_ket_thuc;
            $model->pf_vai_tro = $k1->pf_vai_tro;
            $model->pf_mo_ta = $k1->pf_mo_ta; 

        }
    }
    if(empty($temp)){
        $model->unsetAttributes();
    }
    if(!isset(yii::app()->session['matk2'])){
    $this->renderPartial('_form', array('model'=>$model));
    } 
?>