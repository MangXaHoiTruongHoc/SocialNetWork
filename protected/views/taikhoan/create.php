<?php
/* @var $this TaikhoanController */
/* @var $model Taikhoan */

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
<?php
        
        $ttbs = Taikhoan::model()->findAll(array('condition'=>'ma_tai_khoan = :matk',
        'params'=>array(':matk' => $matk)));
        foreach($ttbs as $k){
           
      
            $model->ma_tai_khoan = $k->ma_tai_khoan;
            $model->email = $k->email;
            $model->ho_ten = $k->ho_ten;
            $model->ngay_sinh = $k->ngay_sinh;
            $model->gioi_tinh = $k->gioi_tinh;
            $model->hinh_dai_dien = $k->hinh_dai_dien;
         
        }
?>
<h3 style="margin-left:10px">Thông Tin Người Dùng 
    <?php   
            // Thực hiện truy vấn lấy giá trị tt-taikhoan để hiện thị lên checked
            $gioihan3 = PF_Gioihan::model()->findAllByAttributes(array('ma_tai_khoan'=> $matk));
            foreach ($gioihan3 as $g ) {
              $tt_taikhoan = $g->pf_tt_taikhoan;
            } 
              // Kiểm tra session nguoi xem de ẩn checkbox
              if(!isset(yii::app()->session['matk2'])){
              ?>  
              <div class="make-switch" data-on="success" data-off="default" style="float:right">
              <input id="<?php echo ($matk)?>"   class='gioihan2' type="checkbox" name="tt_taikhoan"  value="<?php echo $tt_taikhoan; ?>" <?php echo $tt_taikhoan == 1 ? "checked": ""; ?> > 
              </div>  
              <?php
              }
    ?>  

</h3>
<?php   if($tt_taikhoan==0){
            // Render qua trang view
            if(isset($model->ma_tai_khoan)){
            $this->renderPartial('view',array('model'=>$model));
            }
        }else{
           if(!isset(yii::app()->session['matk2'])){
                if(isset($model->ma_tai_khoan)){
                $this->renderPartial('view',array('model'=>$model));
            }
           }else{
              echo "<h4 style='margin-left:10px'>Bạn phải liên hệ với chủ hồ sơ để được xem thông tin. Cảm ơn!!!</h4>";
           } 
        }

?>
<?php
        if(!isset($model->ma_tai_khoan)){
         echo "<h1' >Create Taikhoan</h1>";
        $this->renderPartial('_form', array('model'=>$model));
        }
        if(!empty($temp)){
            $this->renderPartial('_form', array('model'=>$model));
        } 
?>