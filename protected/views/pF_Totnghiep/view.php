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
        $Cnganh = $listc[$model->pf_ma_chuyen_nganh];
        //  Lấy kết quả tốt nghiệp
        
        $ketqua = PF_Ketquatotnghiep::model()->findAll(array('select'=>'pf_ma_ket_qua_tn,pf_ket_qua'));
        $list = array();
        foreach($ketqua as $k){
           $listk[$k->pf_ma_ket_qua_tn] = $k->pf_ket_qua; 
        }
        $ketqua = $listk[$model->pf_ma_ket_qua_tn];
        
        

     
?>
<div id="tot_nghiep<?php echo($model->pf_ma_tn) ?>">
  
      
      <?php 
            
      $deleteajax= CHtml::ajaxLink('Xóa',
                "index.php?r=pf_totnghiep/delete&id=$model->pf_ma_tn",
                array(
                                'type'=>'post',
                                'data' => null,
                                'success' => 'function(){
                                    alert("Xóa thành công");
                                    $("#tot_nghiep'.$model->pf_ma_tn.'").
                                    slideUp("slow",function(){$("#tot_nghiep'.$model->pf_ma_tn.'").remove();});
                                }'
                ),
                array( 'confirm'=>'Ban muon xoa chu',)
);
?>


<?php 
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'pf_ma_tn',
        array('label'=>$model->getAttributeLabel('pf_ten_truong_tn'),
            'type'=>'raw',
            'value'=>$model->pf_ten_truong_tn."<p class='re_up' style='float: right; display:none'><a href='index.php?r=pf_totnghiep/update&id={$model->pf_ma_tn}'>Sửa</a> 
            {$deleteajax} </p>"
        ),
		'pf_ngay_bat_dau',
		'pf_ngay_ket_thuc',
        array('label'=>'Kết Quả Tốt Nghiệp',
        'type'=>'raw',
        'value'=> $ketqua
        ),
		//'pf_ma_ket_qua_tn',
		//'ma_tai_khoan',
		//'pf_ma_chuyen_nganh',
        array('label'=>'Chuyên Ngành',
        'type'=>'raw',
        'value'=> $Cnganh
        ),
        
	),
)); ?>
</div>