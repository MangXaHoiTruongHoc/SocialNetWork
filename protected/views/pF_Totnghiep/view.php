<?php
/* @var $this PF_TotnghiepController */
/* @var $model PF_Totnghiep */

//$this->breadcrumbs=array(
//	'Pf  Totnghieps'=>array('index'),
//	$model->pf_ma_tn,
//);
    $matk = yii::app()->session['ma_tai_khoan'];
//$this->menu=array(
//	array('label'=>'List PF_Totnghiep', 'url'=>array('index')),
//	array('label'=>'Create PF_Totnghiep', 'url'=>array('create')),
//	array('label'=>'Update PF_Totnghiep', 'url'=>array('update', 'id'=>$model->pf_ma_tn)),
//	array('label'=>'Delete PF_Totnghiep', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pf_ma_tn),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage PF_Totnghiep', 'url'=>array('admin')),
//);
$this->menu= array(
    array('label'=>'Thông Tin Người Dùng', 'url'=>array('taikhoan/view','id'=>$matk)),
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

<!--</a><h1>View PF_Totnghiep #<?php echo $model->pf_ma_tn; ?></h1>-->
<?php
        // Lấy chuyên nghành
        $chuyennganh = new PF_Chuyennganh;
        
        $listcn = PF_Chuyennganh::model()->findAll(array('select'=>'pf_ma_chuyen_nganh,pf_chuyen_nganh'));
        $listc =array();
        foreach($listcn as $l){
             $listc[$l->pf_ma_chuyen_nganh] = $l->pf_chuyen_nganh;
        }
        //  Lấy kết quả tốt nghiệp
        
        $ketqua = PF_Ketquatotnghiep::model()->findAll(array('select'=>'pf_ma_ket_qua_tn,pf_ket_qua'));
        $list = array();
        foreach($ketqua as $k){
           $listk[$k->pf_ma_ket_qua_tn] = $k->pf_ket_qua; 
        }
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'pf_ma_tn',
		'pf_ten_truong_tn',
		'pf_ngay_bat_dau',
		'pf_ngay_ket_thuc',
        array('label'=>'Kết Quả Tốt Nghiệp',
        'type'=>'raw',
        'value'=> CHtml::textField('ketqua',$listk[$model->pf_ma_ket_qua_tn])
        ),
		//'pf_ma_ket_qua_tn',
		//'ma_tai_khoan',
		//'pf_ma_chuyen_nganh',
        array('label'=>'Chuyên Ngành',
        'type'=>'raw',
        'value'=> CHtml::textField('ketqua',$listc[$model->pf_ma_chuyen_nganh])
        )
	),
)); ?>
