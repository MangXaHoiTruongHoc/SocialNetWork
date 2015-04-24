<?php
/* @var $this PF_KinhnghiemlamviecController */
/* @var $model PF_Kinhnghiemlamviec */

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
<div id="knlamviec<?php echo($model->pf_ma_kinh_nghiem) ?>">
   <?php 
      //Kiem tra nguoi xem để ẩn .re_up
      if(isset(yii::app()->session['matk2'])){
            Yii::app()->clientScript->registerScript('re_up',"
             $('.re_up').css({'display':'none'});
            ");
        }
	      //Delete totnghiep      
	      $deleteajax= CHtml::ajaxLink('Xóa',
	                "index.php?r=pf_kinhnghiemlamviec/delete&id=$model->pf_ma_kinh_nghiem",
	                array(
	                                'type'=>'post',
	                                'data' => null,
	                                'success' => 'function(){
	                                    alert("Xóa thành công");
	                                    $("#knlamviec'.$model->pf_ma_kinh_nghiem.'").
	                                    slideUp("slow",function(){$("#knlamviec'.$model->pf_ma_kinh_nghiem.'").remove();});
	                                }'
	                ),
	                array( 'confirm'=>'Ban muon xoa chu',)
	        );
	        ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('label'=>$model->getAttributeLabel('pf_ten_cong_viec'),
            'type'=>'raw',
            'value'=>$model->pf_ten_cong_viec."<div class='re_up' style='float: right; display:display'><a href='index.php?r=pf_kinhnghiemlamviec/update&id={$model->pf_ma_kinh_nghiem}'>Sửa</a> 
            {$deleteajax} </div>"
        ),	
		'pf_ten_cong_ty',
		'pf_ngay_bat_dau',
		'pf_ngay_ket_thuc',
		'pf_chuc_vu',
		'pf_mo_ta',
	),
)); ?>
<p></p>
</div>