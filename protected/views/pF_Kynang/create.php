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
     array('label'=>'Hoạt Động Ngoại Khóa', 'url'=>array('#')),
     array('label'=>'Kinh Nghiệm Làm Việc', 'url'=>array('#')),
     array('label'=>'Mục Tiêu Nghề Nghiệp', 'url'=>array('#')),
     );
     $matk = yii::app()->session['ma_tai_khoan'];
?>
<h1>Kỹ Năng</h1>
<?php
    $kynang = PF_Kynang::model()->findAll(array('condition'=>'ma_tai_khoan = :matk','params'=>array(':matk'=>$matk)));
    if(isset($kynang)){
    foreach($kynang as $k){
         $model->pf_ma_ky_nang = $k->pf_ma_ky_nang;
        $model->pf_ky_nang = $k->pf_ky_nang;
        $model->pf_so_nam_kinh_nghiem = $k->pf_so_nam_kinh_nghiem;
        $model->pf_mo_ta = $k->pf_mo_ta;
        $this->renderPartial('view',array('model'=>$model));
        }
    }

?>   
<h1>Thêm Kỹ Năng</h1>
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
$this->renderPartial('_form', array('model'=>$model)); 

?>