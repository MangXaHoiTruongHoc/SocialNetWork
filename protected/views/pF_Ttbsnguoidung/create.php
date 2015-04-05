<?php
/* @var $this PF_TtbsnguoidungController */
/* @var $model PF_Ttbsnguoidung */

//$this->breadcrumbs=array(
//	'Pf  Ttbsnguoidungs'=>array('index'),
//	'Create',
//);
    $matk = Yii::app()->session['ma_tai_khoan'];
//$this->menu=array(
//	array('label'=>'List PF_Ttbsnguoidung', 'url'=>array('index')),
//	array('label'=>'Manage PF_Ttbsnguoidung', 'url'=>array('admin')),
//);
//
  $this->menu= array(
    array('label'=>'Thông Tin Người Dùng', 'url'=>array('taikhoan/create')),
     array('label'=>'Thông Tin Bổ Sung', 'url'=>array('pf_ttbsnguoidung/create')),
     array('label'=>'Tốt Nghiệp', 'url'=>array('pf_totnghiep/create')),
     array('label'=>'Ngoại Ngữ', 'url'=>array('#')),
     array('label'=>'Kỹ Năng', 'url'=>array('#')),
     array('label'=>'Hoạt Động Học Tập', 'url'=>array('#')),
     array('label'=>'Hoạt Động Ngoại Khóa', 'url'=>array('#')),
      array('label'=>'Kinh Nghiệm Làm Việc', 'url'=>array('#')),
      array('label'=>'Mục Tiêu Nghề Nghiệp', 'url'=>array('#')),
     );
?>

<?php
        // Lấy thông tin bổ sung người dùng
        
        $ttbs = PF_Ttbsnguoidung::model()->findAll(array('condition'=>'ma_tai_khoan = :matk',
        'params'=>array(':matk' => $matk)));
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
<?php if(isset($model->pf_ma_ttr_nguoi_dung)) { // Kiểm tra mã ttbs đã có chưa nếu có rồi thì hiện form view ngược lại thì thôi
echo "<h1>Thông Tin Bổ Sung</h1>";
// Render qua trang view
$this->renderPartial('view',array('model'=>$model));
}
?>
<?php
    if(empty($model->pf_ma_ttr_nguoi_dung)){ //Kiểm tra mã ttbs đã có chưa nếu chưa thì hiền form view nếu rồi thì thôi
?>
<h1>Thêm Thông Tin Bổ Sung</h1>
<?php $this->renderPartial('_form', array('model'=>$model));
}
    if(!empty($temp)){
        $this->renderPartial('_form', array('model'=>$model));
    }
 ?>