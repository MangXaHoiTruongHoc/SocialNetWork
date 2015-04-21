<?php
/* @var $this PF_TtbsnguoidungController */
/* @var $model PF_Ttbsnguoidung */

//$this->breadcrumbs=array(
//	'Pf  Ttbsnguoidungs'=>array('index'),
//	'Create',
//);
    $matk = Yii::app()->session['ma_tai_khoan'];
   // Kiểm tra matk người xem.
    if(isset(yii::app()->session['matk2'])){
            $matk = yii::app()->session['matk2'];
    }
//$this->menu=array(
//	array('label'=>'List PF_Ttbsnguoidung', 'url'=>array('index')),
//	array('label'=>'Manage PF_Ttbsnguoidung', 'url'=>array('admin')),
//);
//
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
        
        // Lấy thông tin bổ sung người dùng
        $ttbs = PF_Ttbsnguoidung::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk)); 
        /*$ttbs = PF_Ttbsnguoidung::model()->findAll(array('condition'=>'ma_tai_khoan = :matk',
        'params'=>array(':matk' => $matk)));*/
        foreach($ttbs as $k){
           
            $model->pf_ma_ttr_nguoi_dung = $k->pf_ma_ttr_nguoi_dung;
            $model->ma_tai_khoan = $k->ma_tai_khoan;
            $model->pf_quoc_tich = $k->pf_quoc_tich;
            $model->pf_dan_toc = $k->pf_dan_toc;
            $model->pf_so_thich = $k->pf_so_thich;
            $model->pf_ton_giao = $k->pf_ton_giao;
            $model->pf_slogan = $k->pf_slogan;
            $model->pf_ma_chuyen_nganh = $k->pf_ma_chuyen_nganh;   
        }
        
        
?>
<?php
        // lấy giới hạn ttbs
        $gioihan3 = PF_Gioihan::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk));
        foreach ($gioihan3 as $g ) {
          $tt_ttbs = $g->pf_tt_ttbs;
        }
        ?>
<h3 style='margin-left:10px' >Thông Tin Bổ Sung
      <?php 
      // Kiểm tra session nguoi xem de ẩn checkbox
      if(!isset(yii::app()->session['matk2'])){
      ?>  
      <div class="make-switch" data-on="success" data-off="default" style="float:right">
      <input id="<?php echo ($matk)?>"   class='gioihan3' type="checkbox" name="tt_ttbs"  value="<?php echo $tt_ttbs; ?>" <?php echo $tt_ttbs == 1 ? "checked": ""; ?> > 
      </div>  
      <?php
      }
      ?>
</h3>
<?php
    if( $tt_ttbs==0){// kiểm tra checkbox đc check chưa.
      if(isset($model->pf_ma_ttr_nguoi_dung)) { // Kiểm tra mã ttbs đã có chưa nếu có rồi thì hiện form view ngược lại thì thôi
      // Render qua trang view
      $this->renderPartial('view',array('model'=>$model));
      }
    }else{
      if(!isset(yii::app()->session['matk2'])){
         if(isset($model->pf_ma_ttr_nguoi_dung)) { // Kiểm tra mã ttbs đã có chưa nếu có rồi thì hiện form view ngược lại thì thôi
        // Render qua trang view
        $this->renderPartial('view',array('model'=>$model));
        }
      }else{
         echo "<h4 style='margin-left:10px'>Bạn phải liên hệ với chủ hồ sơ để được xem thông tin. Cảm ơn!!!</h4>";
      }
    }
?>
<?php
        if(empty($model->pf_ma_ttr_nguoi_dung) && empty(yii::app()->session['matk2'])){ //Kiểm tra mã ttbs đã có chưa nếu chưa thì hiền form view nếu rồi thì thôi
        $this->renderPartial('_form', array('model'=>$model));
        }
        if(!empty($temp)){
            $this->renderPartial('_form', array('model'=>$model));
        }
?>