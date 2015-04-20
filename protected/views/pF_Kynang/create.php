<?php
/* @var $this PF_KynangController */
/* @var $model PF_Kynang */

$this->menu= array(
     array('label'=>'Thông Tin Người Dùng', 'url'=>array('taikhoan/create')),
     array('label'=>'Thông Tin Bổ Sung', 'url'=>array('pf_ttbsnguoidung/create')),
     array('label'=>'Tốt Nghiệp', 'url'=>array('pf_totnghiep/create')),
     array('label'=>'Ngoại Ngữ', 'url'=>array('#')),
     array('label'=>'Kỹ Năng', 'url'=>array('pf_kynang/create')),
     array('label'=>'Hoạt Động Học Tập', 'url'=>array('#')),
     array('label'=>'Hoạt Động Ngoại Khóa', 'url'=>array('pf_hoatdongngoaikhoa/create')),
     array('label'=>'Kinh Nghiệm Làm Việc', 'url'=>array('#')),
     array('label'=>'Mục Tiêu Nghề Nghiệp', 'url'=>array('#')),
     );
     
?>
        <?php
        // Khởi tại biến matk người dùng
        $matk = yii::app()->session['ma_tai_khoan'];
         // Kiểm tra matk người xem.
        if(isset(yii::app()->session['matk2'])){
                    $matk = yii::app()->session['matk2'];
        }
        ?>

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
   
    $kynang = PF_Kynang::model()->findAll(array('condition'=>'ma_tai_khoan = :matk','params'=>array(':matk'=>$matk)));

    if($tt_kn==0){// kiểm tra checkbox đc check chưa.
    //kiểm tra giá trị kỹ năng để hiện thị view
    if(isset($kynang)){ 
    foreach($kynang as $k){
        $model->pf_ma_ky_nang = $k->pf_ma_ky_nang;
        $model->pf_ky_nang = $k->pf_ky_nang;
        $model->pf_so_nam_kinh_nghiem = $k->pf_so_nam_kinh_nghiem;
        $model->pf_mo_ta = $k->pf_mo_ta;
        $this->renderPartial('view',array('model'=>$model));
        }
    }
  }else{// Trường hợp $tt_kn = 1 và matk là người xem thì không hiển thị view.
    if(!isset(yii::app()->session['matk2'])){
       if(isset($kynang)){
        foreach($kynang as $k){
        $model->pf_ma_ky_nang = $k->pf_ma_ky_nang;
        $model->pf_ky_nang = $k->pf_ky_nang;
        $model->pf_so_nam_kinh_nghiem = $k->pf_so_nam_kinh_nghiem;
        $model->pf_mo_ta = $k->pf_mo_ta;
        $this->renderPartial('view',array('model'=>$model));
        }
      } 

    }else{
            echo "<h4 style='margin-left:10px'>Bạn phải liên hệ với chủ hồ sơ để được xem thông tin. Cảm ơn!!!</h4>";
    }
  }

?>   
<?php 
    // Kiểm tra khi click vào sửa
    $makn = yii::app()->session['pf_ma_ky_nang'];
    if(isset($temp)){
        $model->unsetAttributes();
        $kynang1 = PF_Kynang::model()->findAll(array('condition'=>'pf_ma_ky_nang = :makn','params'=>array(':makn'=>$makn)));
          foreach($kynang1 as $k1){
            $model->pf_ma_ky_nang = $k1->pf_ma_ky_nang;
            $model->pf_ky_nang = $k1->pf_ky_nang;
            $model->pf_so_nam_kinh_nghiem = $k1->pf_so_nam_kinh_nghiem;
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
