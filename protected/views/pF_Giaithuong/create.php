<?php
/* @var $this PF_GiaithuongController */
/* @var $model PF_Giaithuong */

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
     array('label'=>'Giải thưởng', 'url'=>array('pf_giaithuong/create')),
     array('label'=>'Kỹ năng', 'url'=>array('pf_kynang/create')),
      array('label'=>'Hoạt động học tập', 'url'=>array('pf_hoatdonghoctap/create')),
     array('label'=>'Hoạt động ngoại khóa', 'url'=>array('pf_hoatdongngoaikhoa/create')),
     array('label'=>'Kinh nghiệm làm việc', 'url'=>array('pf_kinhnghiemlamviec/create')),
     array('label'=>'Mục tiêu nghề nghiệp', 'url'=>array('pf_muctieunghenghiep/create')),
     ); 
?>

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
        
        // Lấy thông tin giải thưởng
        $ttgiaithuong = PF_Giaithuong::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk)); 
        if($tt_giaithuong==0){// kiểm tra checkbox đc check chưa.
    //kiểm tra giá trị hdnk để hiện thị view
          if(isset($ttgiaithuong)){
             foreach($ttgiaithuong as $k){
                 $model->pf_ma_giai_thuong = $k->pf_ma_giai_thuong;
                 $model->pf_ten_giai_thuong = $k->pf_ten_giai_thuong;
                 $model->pf_ngay_nhan_giai = $k->pf_ngay_nhan_giai;
                 $model->ma_tai_khoan = $k->ma_tai_khoan;
                 $model->pf_mo_ta = $k->pf_mo_ta;
                 $this->renderPartial('view',array('model'=>$model));
                 echo "<h3></h3>"; 
             }
             }
        }else{
          if(!isset(yii::app()->session['matk2'])){
               if(isset($ttgiaithuong)){
                  foreach($ttgiaithuong as $k){
                      	 $model->pf_ma_giai_thuong = $k->pf_ma_giai_thuong;
		                 $model->pf_ten_giai_thuong = $k->pf_ten_giai_thuong;
		                 $model->pf_ngay_nhan_giai = $k->pf_ngay_nhan_giai;
		                 $model->ma_tai_khoan = $k->ma_tai_khoan;
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
     $magiaithuong = yii::app()->session['pf_ma_giai_thuong'];
     
     if(isset($temp)){
        $model->unsetAttributes();
        
        $giaithuong = PF_Giaithuong::model()->findAllByAttributes(array('pf_ma_giai_thuong'=> $magiaithuong));
          foreach($giaithuong as $k1){
             $model->pf_ma_giai_thuong = $k1->pf_ma_giai_thuong;
	         $model->pf_ten_giai_thuong = $k1->pf_ten_giai_thuong;
	         $model->pf_ngay_nhan_giai = $k1->pf_ngay_nhan_giai;
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