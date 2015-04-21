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
     array('label'=>'Kỹ năng', 'url'=>array('pf_kynang/create')),
     array('label'=>'Hoạt động học tập', 'url'=>array('pf_hoatdonghoctap/create')),
     array('label'=>'Hoạt động ngoại khóa', 'url'=>array('pf_hoatdongngoaikhoa/create')),
     array('label'=>'Kinh nghiệm làm việc', 'url'=>array('#')),
     array('label'=>'Mục tiêu nghề nghiệp', 'url'=>array('#')),
     );
?>
<h3 style="margin-left:10px">Ngoại ngữ</h3>
<?php
		$ngoaingu = PF_Ngoaingu::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk));
		if(isset($ngoaingu)){
			foreach ($ngoaingu as $key) {
				$model->pf_ma_ngoai_ngu = $key->pf_ma_ngoai_ngu;
				$model->pf_ten_ngoai_ngu = $key->pf_ten_ngoai_ngu;
				$model->pf_ma_muc_do_nn = $key->pf_ma_muc_do_nn;
				$this->renderPartial('view',array('model'=>$model));

			}
		}


?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>