<?php
/* @var $this PF_NgoainguController */
/* @var $model PF_Ngoaingu */

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
		$ngoaingu = PF_Ngoaingu::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk));
        if($tt_ngoaingu == 0){
    		if(isset($ngoaingu)){
    			foreach ($ngoaingu as $key) {
    				$model->pf_ma_ngoai_ngu = $key->pf_ma_ngoai_ngu;
    				$model->pf_ten_ngoai_ngu = $key->pf_ten_ngoai_ngu;
    				$model->pf_ma_muc_do_nn = $key->pf_ma_muc_do_nn;
    				$this->renderPartial('view',array('model'=>$model));

    			}
    		}
        }else{
            if(!isset(yii::app()->session['matk2'])){
                if(isset($ngoaingu)){
                    foreach ($ngoaingu as $key) {
                        $model->pf_ma_ngoai_ngu = $key->pf_ma_ngoai_ngu;
                        $model->pf_ten_ngoai_ngu = $key->pf_ten_ngoai_ngu;
                        $model->pf_ma_muc_do_nn = $key->pf_ma_muc_do_nn;
                        $this->renderPartial('view',array('model'=>$model));
                            
                    }
                }
            }else{
                 echo "<h4 style='margin-left:10px'>Bạn phải liên hệ với chủ hồ sơ để được xem thông tin. Cảm ơn!!!</h4>";
            }
        }


?>
<?php 
    // Lấy đúng ngoại ngữ theo id đã set.
    $ma_nn  = yii::app()->session['pf_ma_ngoai_ngu'];
    $ngoaingu = PF_Ngoaingu::model()->findAllByAttributes(array('pf_ma_ngoai_ngu'=>$ma_nn));
    foreach($ngoaingu as $n){
                    $model->pf_ma_ngoai_ngu = $n->pf_ma_ngoai_ngu;
                    $model->pf_ten_ngoai_ngu = $n->pf_ten_ngoai_ngu;
                    $model->pf_ma_muc_do_nn = $n->pf_ma_muc_do_nn;
                   
                 }
    if(empty($temp)){// kiểm tra trường hợp update để set lại form
    $model->unsetAttributes();// set lại model
    }
    if(!isset(yii::app()->session['matk2'])){  
    $this->renderPartial('_form', array('model'=>$model));
    }
 ?>
 