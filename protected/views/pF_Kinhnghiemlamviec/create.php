<?php
/* @var $this PF_KinhnghiemlamviecController */
/* @var $model PF_Kinhnghiemlamviec */

     $matk = yii::app()->session['ma_tai_khoan'];
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
     array('label'=>'Kinh nghiệm làm việc', 'url'=>array('pf_kinhnghiemlamviec/create')),
     array('label'=>'Mục tiêu nghề nghiệp', 'url'=>array('pf_muctieunghenghiep/create')),
     ); 
        // Thực hiện lấy giới hạn   
        $gioihan = PF_Gioihan::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk));
        foreach ($gioihan as $g ) {
          $tt_knlamviec = $g->pf_tt_knlamviec;
        }
?>

<h3 style='margin-left:10px'>Kinh nghiệm làm việc
     <?php
        if(!isset(yii::app()->session['matk2'])){
      ?>  
        <div class="make-switch" data-on="success" data-off="default" style="float:right">
          <input id="<?php echo ($matk)?>"   class='gioihan7' type="checkbox" name="tt_knlamviec"  value="<?php echo $tt_knlamviec; ?>" <?php echo $tt_knlamviec == 1 ? "checked": ""; ?> > 
        </div>  
      <?php
      }
     ?>  
</h3>
<?php
        $maknlv = PF_Kinhnghiemlamviec::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk));
/*       // print_r($matn); die;
        foreach($maknlv as $k){
            
        }*/
        if($tt_knlamviec==0){// kiểm tra checkbox đc check chưa.
        if(isset($maknlv)){   
          foreach($maknlv as $l){
                     $model->pf_ma_kinh_nghiem =  $l->pf_ma_kinh_nghiem;
                     $model->pf_ten_cong_ty = $l->pf_ten_cong_ty;
                     $model->pf_ten_cong_viec = $l->pf_ten_cong_viec;
                     $model->pf_ngay_ket_thuc = $l->pf_ngay_ket_thuc;
                     $model->pf_ngay_bat_dau = $l->pf_ngay_bat_dau;
                     $model->pf_chuc_vu= $l->pf_chuc_vu;
                     $model->pf_mo_ta= $l->pf_mo_ta;
                     $model->ma_tai_khoan= $l->ma_tai_khoan;
                     $this->renderPartial('view',array('model'=>$model));
                   }           
          }
        }else{
          if(!isset(yii::app()->session['matk2'])){
            foreach($maknlv as $l){
                     $model->pf_ma_kinh_nghiem =  $l->pf_ma_kinh_nghiem;
                     $model->pf_ten_cong_ty = $l->pf_ten_cong_ty;
                     $model->pf_ten_cong_viec = $l->pf_ten_cong_viec;
                     $model->pf_ngay_ket_thuc = $l->pf_ngay_ket_thuc;
                     $model->pf_ngay_bat_dau = $l->pf_ngay_bat_dau;
                     $model->pf_chuc_vu= $l->pf_chuc_vu;
                     $model->pf_mo_ta= $l->pf_mo_ta;
                     $model->ma_tai_khoan= $l->ma_tai_khoan;
                     $this->renderPartial('view',array('model'=>$model));
                   }    
          }
          else{
            echo "<h4 style='margin-left:10px'>Bạn phải liên hệ với chủ hồ sơ để được xem thông tin. Cảm ơn!!!</h4>";
          }
        }
?>
<?php 
    // Lấy đúng kinh nghiệm làm việc theo id đã set.
    $kn  = yii::app()->session['pf_ma_kinh_nghiem'];
    $kinhnghiem = PF_Kinhnghiemlamviec::model()->findAllByAttributes(array('pf_ma_kinh_nghiem'=>$kn));
    foreach($kinhnghiem as $k){
                    $model->pf_ma_kinh_nghiem =  $k->pf_ma_kinh_nghiem;
                     $model->pf_ten_cong_ty = $k->pf_ten_cong_ty;
                     $model->pf_ten_cong_viec = $k->pf_ten_cong_viec;
                     $model->pf_ngay_ket_thuc = $k->pf_ngay_ket_thuc;
                     $model->pf_ngay_bat_dau = $k->pf_ngay_bat_dau;
                     $model->pf_chuc_vu= $k->pf_chuc_vu;
                     $model->pf_mo_ta= $k->pf_mo_ta;
                   
                 }
    if(empty($temp)){// kiểm tra trường hợp update để set lại form
    $model->unsetAttributes();// set lại model
    }
    if(!isset(yii::app()->session['matk2'])){  
    $this->renderPartial('_form', array('model'=>$model));
    }
 ?>