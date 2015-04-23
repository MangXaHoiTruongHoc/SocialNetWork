<?php
/* @var $this PF_MuctieunghenghiepController */
/* @var $model PF_Muctieunghenghiep */

	$loaicv = PF_Loaicongviec::model()->findAll();
	$list = array();
	// vòng lặp lấy ra mức độ theo id 
	foreach ($loaicv as $key ) {
		$list[$key->pf_ma_loai_cv] = $key->pf_ten_loai_cv;
	}

$this->menu= array(
     array('label'=>'Thông tin người dùng', 'url'=>array('taikhoan/create')),
     array('label'=>'Thông tin bổ sung', 'url'=>array('pf_ttbsnguoidung/create')),
     array('label'=>'Tốt nghiệp', 'url'=>array('pf_totnghiep/create')),
     array('label'=>'Ngoại ngữ', 'url'=>array('pf_ngoaingu/create')),
     array('label'=>'Kỹ năng', 'url'=>array('pf_kynang/create')),
      array('label'=>'Hoạt động học tập', 'url'=>array('pf_hoatdonghoctap/create')),
     array('label'=>'Hoạt động ngoại khóa', 'url'=>array('pf_hoatdongngoaikhoa/create')),
     array('label'=>'Kinh nghiệm làm việc', 'url'=>array('pf_kinhnghiemlamviec/create')),
     array('label'=>'Mục tiêu nghề nghiệp', 'url'=>array('pf_muctieunghenghiep/create')),
     ); 
?>
<div id="mtnghenghiep<?php echo($model->pf_ma_muc_tieu) ?>">
<?php 
      //Kiem tra nguoi xem để ẩn .re_up
      if(isset(yii::app()->session['matk2'])){
            Yii::app()->clientScript->registerScript('re_up',"
             $('.re_up').css({'display':'none'});
            ");
        }
	      //Delete totnghiep      
	      $deleteajax= CHtml::ajaxLink('Xóa',
	                "index.php?r=pf_muctieunghenghiep/delete&id=$model->pf_ma_muc_tieu",
	                array(
	                                'type'=>'post',
	                                'data' => null,
	                                'success' => 'function(){
	                                    alert("Xóa thành công");
	                                    $("#mtnghenghiep'.$model->pf_ma_muc_tieu.'").
	                                    slideUp("slow",function(){$("#mtnghenghiep'.$model->pf_ma_muc_tieu.'").remove();});
	                                }'
	                ),
	                array( 'confirm'=>'Ban muon xoa chu',)
	        );
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'pf_ma_muc_tieu',
		array('label'=>$model->getAttributeLabel('pf_ten_cong_ty'),
            'type'=>'raw',
            'value'=>$model->pf_ten_cong_ty."<div class='re_up' style='float: right; display:display'><a href='index.php?r=pf_muctieunghenghiep/update&id={$model->pf_ma_muc_tieu}'>Sửa</a> 
            {$deleteajax} </div>"
        ),	
		'ma_vi_tri',
		'pf_muc_tieu',
		array('label'=>$model->getAttributeLabel('pf_ma_loai_cv'),
			'type'=>'raw',
			'value'=>$list[$model->pf_ma_loai_cv]),
		'pf_noi_lam_viec',
	),
)); ?>
<p></p>
</div>