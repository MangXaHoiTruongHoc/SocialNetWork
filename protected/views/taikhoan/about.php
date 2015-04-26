<?php
/* @var $this SiteController */
    
    
//$matk = Taikhoan::model()->findAll(array('select'=>'ma_tai_khoan,email','condition'=>'email = "%$email%"'));
        $email = Yii::app()->session['email'];
        $matk = Yii::app()->session['ma_tai_khoan'];
        if(isset(yii::app()->session['matk2'])){
          $matk  = yii::app()->session['matk2'];
        }
    
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
   
   $this->renderPartial('view',array('id'=>$matk,'model'=>$model));
?>
<!-- ******************************************************* -->
<!-- Tốt nghiệp -->
<h3   style="margin-left:10px">Tốt nghiệp
      <?php
      $gioihan = PF_Gioihan::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk));
        foreach ($gioihan as $g ) {
          $tt_tn = $g->pf_tt_totnghiep;
        }
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
        $model3 = new PF_Totnghiep;
        $matn = PF_Totnghiep::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk));
        if($tt_tn==0){// kiểm tra checkbox đc check chưa.
        if(isset($matn)){   
          foreach($matn as $l){
                     $model3->pf_ma_tn =  $l->pf_ma_tn;
                     $model3->pf_ten_truong_tn = $l->pf_ten_truong_tn;
                     $model3->pf_ngay_bat_dau = $l->pf_ngay_bat_dau;
                     $model3->pf_ngay_ket_thuc = $l->pf_ngay_ket_thuc;
                     $model3->pf_ma_chuyen_nganh = $l->pf_ma_chuyen_nganh;
                     $model3->pf_ma_ket_qua_tn= $l->pf_ma_ket_qua_tn;
                     $this->renderPartial('//pf_totnghiep/view',array('model'=>$model3));
                   }           
          }
        }else{
          if(!isset(yii::app()->session['matk2'])){
            foreach($matn as $l){
                     $model3->pf_ma_tn =  $l->pf_ma_tn;
                     $model3->pf_ten_truong_tn = $l->pf_ten_truong_tn;
                     $model3->pf_ngay_bat_dau = $l->pf_ngay_bat_dau;
                     $model3->pf_ngay_ket_thuc = $l->pf_ngay_ket_thuc;
                     $model3->pf_ma_chuyen_nganh = $l->pf_ma_chuyen_nganh;
                     $model3->pf_ma_ket_qua_tn= $l->pf_ma_ket_qua_tn;
                     $this->renderPartial('//pf_totnghiep/view',array('model'=>$model3));
                   }    
          }
          else{
            echo "<h4 style='margin-left:10px'>Bạn phải liên hệ với chủ hồ sơ để được xem thông tin. Cảm ơn!!!</h4>";
          }
        }
?>
<!-- Kết thúc tốt nghiệp -->
<!-- ******************************************************* -->
<!-- Ngoại ngữ -->
<h3 style="margin-left:10px">Ngoại ngữ
<?php
      // lấy giới hạn kỹ năng
        $gioihan6 = PF_Gioihan::model()->findAllByAttributes(array('ma_tai_khoan'=> $matk));
    
        foreach ($gioihan6 as $g ) {
          $tt_ngoaingu = $g->pf_tt_ngoaingu;
        }

      // Kiểm tra session nguoi xem de ẩn checkbox
      if(!isset(yii::app()->session['matk2'])){
      ?>  
      <div class="make-switch" data-on="success" data-off="default" style="float:right">
      <input id="<?php echo ($matk)?>"   class='gioihan6' type="checkbox" name="tt_ngoaingu"  value="<?php echo $tt_ngoaingu; ?>" <?php echo $tt_ngoaingu == 1 ? "checked": ""; ?> > 
      </div>  
      <?php
      }
      ?>
</h3>
<?php
    $model4 = new PF_Ngoaingu;
    $ngoaingu = PF_Ngoaingu::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk));
        if($tt_ngoaingu == 0){
        if(isset($ngoaingu)){
          foreach ($ngoaingu as $key) {
            $model4->pf_ma_ngoai_ngu = $key->pf_ma_ngoai_ngu;
            $model4->pf_ten_ngoai_ngu = $key->pf_ten_ngoai_ngu;
            $model4->pf_ma_muc_do_nn = $key->pf_ma_muc_do_nn;
            $this->renderPartial('/PF_Ngoaingu/view',array('model'=>$model4));

          }
        }
        }else{
            if(!isset(yii::app()->session['matk2'])){
                if(isset($ngoaingu)){
                    foreach ($ngoaingu as $key) {
                        $model4->pf_ma_ngoai_ngu = $key->pf_ma_ngoai_ngu;
                        $model4->pf_ten_ngoai_ngu = $key->pf_ten_ngoai_ngu;
                        $model4->pf_ma_muc_do_nn = $key->pf_ma_muc_do_nn;
                        $this->renderPartial('/PF_Ngoaingu/view',array('model'=>$model4));
                            
                    }
                }
            }else{
                 echo "<h4 style='margin-left:10px'>Bạn phải liên hệ với chủ hồ sơ để được xem thông tin. Cảm ơn!!!</h4>";
            }
        }


?>
<!-- Kết thúc ngoại ngữ -->
<!-- ******************************************************* -->
<!-- Phần kỹ năng người dùng -->
<h3 style="margin-left:10px"> Kỹ Năng
    <?php
      // lấy giới hạn kỹ năng
        $gioihan1 = PF_Gioihan::model()->findAllByAttributes(array('ma_tai_khoan'=> $matk));
        foreach ($gioihan1 as $g ) {
          $tt_kn = $g->pf_tt_kynang;
        }
      // Kiểm tra session nguoi xem de ẩn checkbox
      if(!isset(yii::app()->session['matk2'])){
      ?>  
      <div class="make-switch" data-on="success" data-off="default" style="float:right">
      <input id="<?php echo ($matk)?>"   class='gioihan1' type="checkbox" name="tt_kynang"  value="<?php echo $tt_kn; ?>" <?php echo $tt_kn == 1 ? "checked": ""; ?> > 
      </div>  
      <?php
      }
      ?>   
</h3>
    <?php
    $model1 = new PF_Kynang;
    $kynang = PF_Kynang::model()->findAll(array('condition'=>'ma_tai_khoan = :matk','params'=>array(':matk'=>$matk)));

    if($tt_kn==0){// kiểm tra checkbox đc check chưa.
    //kiểm tra giá trị kỹ năng để hiện thị view
    if(isset($kynang)){ 
    foreach($kynang as $k){
        $model1->pf_ma_ky_nang = $k->pf_ma_ky_nang;
        $model1->pf_ky_nang = $k->pf_ky_nang;
        $model1->pf_so_nam_kinh_nghiem = $k->pf_so_nam_kinh_nghiem;
        $model1->pf_mo_ta = $k->pf_mo_ta;
        $this->renderPartial('/pf_kynang/view',array('model'=>$model1));
        }
    }
  }else{// Trường hợp $tt_kn = 1 và matk là người xem thì không hiển thị view.
    if(!isset(yii::app()->session['matk2'])){
       if(isset($kynang)){
        foreach($kynang as $k){
        $model1->pf_ma_ky_nang = $k->pf_ma_ky_nang;
        $model1->pf_ky_nang = $k->pf_ky_nang;
        $model1->pf_so_nam_kinh_nghiem = $k->pf_so_nam_kinh_nghiem;
        $model1->pf_mo_ta = $k->pf_mo_ta;
        $this->renderPartial('/pf_kynang/view',array('model'=>$model1));
        }
      } 

    }else{
            echo "<h4 style='margin-left:10px'>Bạn phải liên hệ với chủ hồ sơ để được xem thông tin. Cảm ơn!!!</h4>";
    }
  }
?>
<!-- Kết thúc phần kỹ năng -->
<!-- ******************************************************* -->
<!-- Phần giải thưởng -->
<h3 style="margin-left:10px">Giải thưởng
<?php
      // lấy giới hạn kỹ năng
        $gioihan9 = PF_Gioihan::model()->findAllByAttributes(array('ma_tai_khoan'=> $matk));
        foreach ($gioihan9 as $g ) {
          $tt_giaithuong = $g->pf_tt_giaithuong;
        }
      // Kiểm tra session nguoi xem de ẩn checkbox
      if(!isset(yii::app()->session['matk2'])){
      ?>  
      <div class="make-switch" data-on="success" data-off="default" style="float:right">
      <input id="<?php echo ($matk)?>"   class='gioihan9' type="checkbox" name="tt_giaithuong"  value="<?php echo $tt_giaithuong; ?>" <?php echo $tt_giaithuong == 1 ? "checked": ""; ?> > 
      </div>  
      <?php
      }
      ?>
</h3>
<?php   
        $model2 = new PF_Giaithuong;
        // Lấy thông tin giải thưởng
        $ttgiaithuong = PF_Giaithuong::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk)); 
        if($tt_giaithuong==0){// kiểm tra checkbox đc check chưa.
    //kiểm tra giá trị hdnk để hiện thị view
          if(isset($ttgiaithuong)){
             foreach($ttgiaithuong as $k){
                 $model2->pf_ma_giai_thuong = $k->pf_ma_giai_thuong;
                 $model2->pf_ten_giai_thuong = $k->pf_ten_giai_thuong;
                 $model2->pf_ngay_nhan_giai = $k->pf_ngay_nhan_giai;
                 $model2->ma_tai_khoan = $k->ma_tai_khoan;
                 $model2->pf_mo_ta = $k->pf_mo_ta;
                 $this->renderPartial('/pf_giaithuong/view',array('model'=>$model2));
                 echo "<h3></h3>"; 
             }
             }
        }else{
          if(!isset(yii::app()->session['matk2'])){
               if(isset($ttgiaithuong)){
                  foreach($ttgiaithuong as $k){
                         $model2->pf_ma_giai_thuong = $k->pf_ma_giai_thuong;
                         $model2->pf_ten_giai_thuong = $k->pf_ten_giai_thuong;
                         $model2->pf_ngay_nhan_giai = $k->pf_ngay_nhan_giai;
                         $model2->ma_tai_khoan = $k->ma_tai_khoan;
                         $model2->pf_mo_ta = $k->pf_mo_ta;
                      $this->renderPartial('/pf_giaithuong/view',array('model'=>$model2));
                      echo "<h3></h3>"; 
                  }
               }
          }else{
                echo "<h4 style='margin-left:10px'>Bạn phải liên hệ với chủ hồ sơ để được xem thông tin. Cảm ơn!!!</h4>";
          }
        }
        
        
?>
<!-- Kết thúc phần giải thưởng -->
<!-- ******************************************************* -->
<!-- Hoạt động học tập -->
<h3 style="margin-left:10px">Hoạt Động Học Tập
<?php
      // lấy giới hạn kỹ năng
        $gioihan5 = PF_Gioihan::model()->findAllByAttributes(array('ma_tai_khoan'=> $matk));
    
        foreach ($gioihan5 as $g ) {
          $tt_hdht = $g->pf_tt_hdhoctap;
        }

      // Kiểm tra session nguoi xem de ẩn checkbox
      if(!isset(yii::app()->session['matk2'])){
      ?>  
      <div class="make-switch" data-on="success" data-off="default" style="float:right">
      <input id="<?php echo ($matk)?>"   class='gioihan5' type="checkbox" name="tt_hdht"  value="<?php echo $tt_hdht; ?>" <?php echo $tt_hdht == 1 ? "checked": ""; ?> > 
      </div>  
      <?php
      }
      ?>
</h3>
<?php   
        $model5 = new PF_Hoatdonghoctap;
        // Lấy thông tin hoạt động học tập
        $tthdht = PF_Hoatdonghoctap::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk)); 
        if($tt_hdht==0){// kiểm tra checkbox đc check chưa.
    //kiểm tra giá trị hdnk để hiện thị view
          if(isset($tthdht)){
             foreach($tthdht as $k){
                 $model5->pf_ma_hdht = $k->pf_ma_hdht;
                 $model5->ma_tai_khoan = $k->ma_tai_khoan;
                 $model5->pf_ten_hoat_dong = $k->pf_ten_hoat_dong;
                 $model5->pf_ngay_bat_dau = $k->pf_ngay_bat_dau;
                 $model5->pf_ngay_ket_thuc = $k->pf_ngay_ket_thuc;
                 $model5->pf_vai_tro = $k->pf_vai_tro;
                 $model5->pf_mo_ta = $k->pf_mo_ta;
                 $this->renderPartial('/PF_hoatdonghoctap/view',array('model'=>$model5));
                 echo "<h3></h3>"; 
             }
             }
        }else{
          if(!isset(yii::app()->session['matk2'])){
               if(isset($tthdht)){
                  foreach($tthdht as $k){
                      $model5->pf_ma_hdht = $k->pf_ma_hdht;
                      $model5->ma_tai_khoan = $k->ma_tai_khoan;
                      $model5->pf_ten_hoat_dong = $k->pf_ten_hoat_dong;
                      $model5->pf_ngay_bat_dau = $k->pf_ngay_bat_dau;
                      $model5->pf_ngay_ket_thuc = $k->pf_ngay_ket_thuc;
                      $model5->pf_vai_tro = $k->pf_vai_tro;
                      $model5->pf_mo_ta = $k->pf_mo_ta;
                      $this->renderPartial('/PF_hoatdonghoctap/view',array('model'=>$model5));
                      echo "<h3></h3>"; 
                  }
               }
          }else{
                echo "<h4 style='margin-left:10px'>Bạn phải liên hệ với chủ hồ sơ để được xem thông tin. Cảm ơn!!!</h4>";
          }
        }
?>
<!-- Kết thúc hoạt động học tập -->
<!-- ******************************************************* -->
<!-- Hoạt động ngoại khóa -->
<h3 style="margin-left:10px">Hoạt động ngoại khóa
<?php
      // lấy giới hạn kỹ năng
        $gioihan4 = PF_Gioihan::model()->findAllByAttributes(array('ma_tai_khoan'=> $matk));
        foreach ($gioihan4 as $g ) {
          $tt_hdnk = $g->pf_tt_hdngoaikhoa;
        }
      // Kiểm tra session nguoi xem de ẩn checkbox
      if(!isset(yii::app()->session['matk2'])){
      ?>  
      <div class="make-switch" data-on="success" data-off="default" style="float:right">
      <input id="<?php echo ($matk)?>"   class='gioihan4' type="checkbox" name="tt_hdht"  value="<?php echo $tt_hdnk; ?>" <?php echo $tt_hdnk == 1 ? "checked": ""; ?> > 
      </div>  
      <?php
      }
      ?>
</h3>
<?php   
        $model6 = new PF_Hoatdongngoaikhoa;
        // Lấy thông tin hoạt động ngoại khóa
        $tthdnk = PF_Hoatdongngoaikhoa::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk)); 
        if($tt_hdnk==0){// kiểm tra checkbox đc check chưa.
    //kiểm tra giá trị hdnk để hiện thị view
          if(isset($tthdnk)){
             foreach($tthdnk as $k){
                 $model6->pf_ma_hdnk = $k->pf_ma_hdnk;
                 $model6->ma_tai_khoan = $k->ma_tai_khoan;
                 $model6->pf_ten_hoat_dong = $k->pf_ten_hoat_dong;
                 $model6->pf_ngay_bat_dau = $k->pf_ngay_bat_dau;
                 $model6->pf_ngay_ket_thuc = $k->pf_ngay_ket_thuc;
                 $model6->pf_vai_tro = $k->pf_vai_tro;
                 $model6->pf_mo_ta = $k->pf_mo_ta;
                 $this->renderPartial('/PF_Hoatdongngoaikhoa/view',array('model'=>$model6));
                 echo "<h3></h3>"; 
             }
             }
        }else{
          if(!isset(yii::app()->session['matk2'])){
               if(isset($tthdnk)){
                  foreach($tthdnk as $k){
                      $model6->pf_ma_hdnk = $k->pf_ma_hdnk;
                      $model6->ma_tai_khoan = $k->ma_tai_khoan;
                      $model6->pf_ten_hoat_dong = $k->pf_ten_hoat_dong;
                      $model6->pf_ngay_bat_dau = $k->pf_ngay_bat_dau;
                      $model6->pf_ngay_ket_thuc = $k->pf_ngay_ket_thuc;
                      $model6->pf_vai_tro = $k->pf_vai_tro;
                      $model6->pf_mo_ta = $k->pf_mo_ta;
                      $this->renderPartial('/PF_Hoatdongngoaikhoa/view',array('model'=>$model6));
                      echo "<h3></h3>"; 
                  }
               }
          }else{
                echo "<h4 style='margin-left:10px'>Bạn phải liên hệ với chủ hồ sơ để được xem thông tin. Cảm ơn!!!</h4>";
          }
        }
        
        
?>
<!-- Kết thúc hoạt động ngoại khóa -->
<!-- ******************************************************* -->
<?php
}
else{
    $this->redirect(array('login'));
}
?>