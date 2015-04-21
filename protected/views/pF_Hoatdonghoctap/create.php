<?php
/* @var $this PF_HoatdonghoctapController */
/* @var $model PF_Hoatdonghoctap */
     $matk = Yii::app()->session['ma_tai_khoan'];
    // Kiểm tra matk người xem.
    if(isset(yii::app()->session['matk2'])){
            $matk = yii::app()->session['matk2'];
    } 

$this->menu= array(
     array('label'=>'Thông tin người dùng', 'url'=>array('taikhoan/create')),
     array('label'=>'Thông tin bổ sung', 'url'=>array('pf_ttbsnguoidung/create')),
     array('label'=>'Tốt nghiệp', 'url'=>array('pf_totnghiep/create')),
     array('label'=>'Ngoại ngữ', 'url'=>array('pf_ngoaingu/create')),
     array('label'=>'Kỹ năng', 'url'=>array('pf_kynang/create')),
      array('label'=>'Hoạt động học tập', 'url'=>array('pf_hoatdonghoctap/create')),
     array('label'=>'Hoạt động ngoại khóa', 'url'=>array('pf_hoatdongngoaikhoa/create')),
     array('label'=>'Kinh nghiệm làm việc', 'url'=>array('#')),
     array('label'=>'Mục tiêu nghề nghiệp', 'url'=>array('#')),
     ); 
?>

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
        
        // Lấy thông tin hoạt động học tập
        $tthdht = PF_Hoatdonghoctap::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk)); 
        if($tt_hdht==0){// kiểm tra checkbox đc check chưa.
    //kiểm tra giá trị hdnk để hiện thị view
          if(isset($tthdht)){
             foreach($tthdht as $k){
                 $model->pf_ma_hdht = $k->pf_ma_hdht;
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
               if(isset($tthdht)){
                  foreach($tthdht as $k){
                      $model->pf_ma_hdht = $k->pf_ma_hdht;
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
     $mahdht = yii::app()->session['pf_ma_hdht'];
     
     if(isset($temp)){
        $model->unsetAttributes();
        
        $hdht1 = PF_Hoatdonghoctap::model()->findAllByAttributes(array('pf_ma_hdht'=> $mahdht));
          foreach($hdht1 as $k1){
            $model->pf_ma_hdht = $k1->pf_ma_hdht;
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