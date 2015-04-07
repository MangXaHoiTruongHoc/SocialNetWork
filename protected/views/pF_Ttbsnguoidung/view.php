<?php
/* @var $this PF_TtbsnguoidungController */
/* @var $model PF_Ttbsnguoidung */

//$this->breadcrumbs=array(
//	'Pf  Ttbsnguoidungs'=>array('index'),
//	$model->pf_ma_ttr_nguoi_dung,
//);

//$this->menu=array(
//	array('label'=>'List PF_Ttbsnguoidung', 'url'=>array('index')),
//	array('label'=>'Create PF_Ttbsnguoidung', 'url'=>array('create')),
//	array('label'=>'Update PF_Ttbsnguoidung', 'url'=>array('update', 'id'=>$model->pf_ma_ttr_nguoi_dung)),
//	array('label'=>'Delete PF_Ttbsnguoidung', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pf_ma_ttr_nguoi_dung),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage PF_Ttbsnguoidung', 'url'=>array('admin')),
//);
    $matk = yii::app()->session['ma_tai_khoan'];
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
    <?php
        $chuyennganh = new PF_Chuyennganh;
        
        $listcn = PF_Chuyennganh::model()->findAll(array('select'=>'pf_ma_chuyen_nganh,pf_chuyen_nganh'));
        $list =array();
        foreach($listcn as $l){
             $list[$l->pf_ma_chuyen_nganh] = $l->pf_chuyen_nganh;
        }
        
         //Yii::app()->clientScript->registerScript('showview', "
//        $('.editview').mouseenter(function(){
//        	$('.form').hide('slow');
//        });
//        ");
    ?>
  

    
<p style='text-align:right'><a class='editview' href='index.php?r=pf_ttbsnguoidung/update&id=<?php echo($model->pf_ma_ttr_nguoi_dung)?>'>Edit</a>
    
 
<?php 
    
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'pf_ma_ttr_nguoi_dung',
		'pf_dan_toc',
		'pf_quoc_tich',
		'pf_so_thich',
		'pf_ton_giao',
		'pf_slogan',
		//'ma_tai_khoan',
		//'pf_ma_chuyen_nganh',
        array(
        'label'=>'Chuyên Ngành',
        'type'=>'raw',
        'value'=>$list[$model->pf_ma_chuyen_nganh],
        )
	),
)); ?>
