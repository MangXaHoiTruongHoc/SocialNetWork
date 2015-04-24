<?php
/* @var $this PF_MuctieunghenghiepController */
/* @var $model PF_Muctieunghenghiep */

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
     array('label'=>'Giải thưởng', 'url'=>array('pf_giaithuong/create')),
     array('label'=>'Kỹ năng', 'url'=>array('pf_kynang/create')),
      array('label'=>'Hoạt động học tập', 'url'=>array('pf_hoatdonghoctap/create')),
     array('label'=>'Hoạt động ngoại khóa', 'url'=>array('pf_hoatdongngoaikhoa/create')),
     array('label'=>'Kinh nghiệm làm việc', 'url'=>array('pf_kinhnghiemlamviec/create')),
     array('label'=>'Mục tiêu nghề nghiệp', 'url'=>array('pf_muctieunghenghiep/create')),
     ); 
      // Thực hiện lấy giới hạn   
        $gioihan = PF_Gioihan::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk));
        foreach ($gioihan as $g ) {
          $tt_mtnghenghiep = $g->pf_tt_mtnghenghiep;
        }
?>
<h3 style="margin-left:10px">Mục tiêu nghề nghiệp
     <?php
        if(!isset(yii::app()->session['matk2'])){
      ?>  
        <div class="make-switch" data-on="success" data-off="default" style="float:right">
          <input id="<?php echo ($matk)?>"   class='gioihan8' type="checkbox" name="tt_mtnghenghiep"  value="<?php echo $tt_mtnghenghiep; ?>" <?php echo $tt_mtnghenghiep == 1 ? "checked": ""; ?> > 
        </div>  
      <?php
      }
     ?>  

</h3>
<?php
     $mamtnn = PF_Muctieunghenghiep::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk));
     if($tt_mtnghenghiep == 0){
          if(isset($mamtnn)){
               foreach ($mamtnn as $l) {
                     $model->pf_ma_muc_tieu =  $l->pf_ma_muc_tieu;
                     $model->pf_ten_cong_ty = $l->pf_ten_cong_ty;
                     $model->ma_vi_tri = $l->ma_vi_tri;
                     $model->pf_muc_tieu = $l->pf_muc_tieu;
                     $model->pf_ma_loai_cv = $l->pf_ma_loai_cv;
                     $model->pf_noi_lam_viec= $l->pf_noi_lam_viec;
                     $this->renderPartial('view',array('model'=>$model));
               }
          
          }
     }
     else{
          if(!isset(yii::app()->session['matk2'])){
                    foreach ($mamtnn as $l) {
                     $model->pf_ma_muc_tieu =  $l->pf_ma_muc_tieu;
                     $model->pf_ten_cong_ty = $l->pf_ten_cong_ty;
                     $model->ma_vi_tri = $l->ma_vi_tri;
                     $model->pf_muc_tieu = $l->pf_muc_tieu;
                     $model->pf_ma_loai_cv = $l->pf_ma_loai_cv;
                     $model->pf_noi_lam_viec= $l->pf_noi_lam_viec;
                     $this->renderPartial('view',array('model'=>$model));
                     }
          }else{
            echo "<h4 style='margin-left:10px'>Bạn phải liên hệ với chủ hồ sơ để được xem thông tin. Cảm ơn!!!</h4>";
          }
     }
     

?>
<?php 
    // Lấy đúng mục tiêu nghề nghiệp đã set.
    $mtnn  = yii::app()->session['pf_ma_muc_tieu'];
    $muctieu = PF_Muctieunghenghiep::model()->findAllByAttributes(array('pf_ma_muc_tieu'=>$mtnn));
    foreach($muctieu as $l){
                     $model->pf_ma_muc_tieu =  $l->pf_ma_muc_tieu;
                     $model->pf_ten_cong_ty = $l->pf_ten_cong_ty;
                     $model->ma_vi_tri = $l->ma_vi_tri;
                     $model->pf_muc_tieu = $l->pf_muc_tieu;
                     $model->pf_ma_loai_cv = $l->pf_ma_loai_cv;
                     $model->pf_noi_lam_viec= $l->pf_noi_lam_viec;

                 }
    if(empty($temp)){// kiểm tra trường hợp update để set lại form
    $model->unsetAttributes();// set lại model
    }
    if(!isset(yii::app()->session['matk2'])){  
    $this->renderPartial('_form', array('model'=>$model));
    }
 ?>