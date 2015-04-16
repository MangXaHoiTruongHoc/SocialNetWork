<?php
/* @var $this PF_TtbsnguoidungController */
/* @var $model PF_Ttbsnguoidung */

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
        if(isset(yii::app()->session['matk2'])){
            Yii::app()->clientScript->registerScript('re_up',"
             $('.re_up').css({'display':'none'});
            ");
    }
    ?>
<?php 
    
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'pf_ma_ttr_nguoi_dung',
        array('label'=>$model->getAttributeLabel('pf_dan_toc'),
            'type'=>'raw',
            'value'=>$model->pf_dan_toc."<div class='re_up' style='float:right;margin-top:2px;'><a href='index.php?r=pf_ttbsnguoidung/update&id=$model->pf_ma_ttr_nguoi_dung'>Edit</a></div>"
            ),
		
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
