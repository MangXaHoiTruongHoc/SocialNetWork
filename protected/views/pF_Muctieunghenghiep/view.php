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
     array('label'=>'Giải thưởng', 'url'=>array('pf_giaithuong/create')),
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
<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'pf_ma_muc_tieu',
		array('label'=>$model->getAttributeLabel('pf_ten_cong_ty'),
            'type'=>'raw',
            'value'=>$model->pf_ten_cong_ty."<div class='re_up' style='float: right; display:display'><a href='index.php?r=pf_muctieunghenghiep/update&id={$model->pf_ma_muc_tieu}'>Sửa</a> 
            {$deleteajax} </div>"
        ),	
		'ma_nganh_nghe',
		'pf_muc_tieu',
		array('label'=>$model->getAttributeLabel('pf_ma_loai_cv'),
			'type'=>'raw',
			'value'=>$list[$model->pf_ma_loai_cv]),
		//'pf_noi_lam_viec',
	),
)); */
?>
</div>
<!-- Table -->
<div class="widget mtnghenghiep<?php echo($model->pf_ma_muc_tieu) ?>">
	<table class="table">
		<tbody>
	        <tr >
	            <th class="center col-md-3" style="text-align:right!important"><?php echo $model->getAttributeLabel('pf_ten_cong_ty')?></th>
	            <td><?php echo $model->pf_ten_cong_ty?>
	            <?php
	            	if(!isset(yii::app()->session['matk2'])){
		                //Delete hoạt động ngoại khóa      
		                $deleteajax= CHtml::ajaxLink('Xóa',
		                "index.php?r=pf_muctieunghenghiep/delete&id=$model->pf_ma_muc_tieu",
		                array(
		                                'type'=>'post',
		                                'data' => null,
		                                'success' => 'function(){
		                                    alert("Xóa thành công");
		                                    $(".mtnghenghiep'.$model->pf_ma_muc_tieu.'").
		                                    slideUp("slow",function(){$(".mtnghenghiep'.$model->pf_ma_muc_tieu.'").remove();});
		                                }'
		                ),
		                array( 'confirm'=>'Ban muon xoa chu',));
		                //Kiem tra nguoi dùng để ẩn hiện action
		                echo "<div class='re_up' style='float: right; display:display'>
		                            <a href='index.php?r=pf_muctieunghenghiep/update&id={$model->pf_ma_muc_tieu}'>Sửa</a> 
		                            {$deleteajax} </div>";
		            }
			    ?>	
	            </td>
	        </tr>
	        <?php
					$nganhnghe = DC_Nganhnghe::model()->findAll();
					$listnn= array();
					foreach ($nganhnghe as $lnn ) {
						$listnn[$lnn->ma_nganh_nghe] = $lnn->ten_nganh_nghe;
					}
					?>
	        <tr >
	            <th class="center" style="text-align:right!important"><?php echo $model->getAttributeLabel('ma_nganh_nghe')?></th>
	            <td><?php echo $listnn[$model->ma_nganh_nghe]?></td>
	        </tr>
	        <tr >
	            <th class="center" style="text-align:right!important"><?php echo $model->getAttributeLabel('pf_muc_tieu')?></th>
	            <td><?php echo $model->pf_muc_tieu?></td>
	        </tr>
	        <tr >
	            <th class="center" style="text-align:right!important"><?php echo $model->getAttributeLabel('pf_ma_loai_cv')?></th>
	            <td><?php echo $list[$model->pf_ma_loai_cv]?></td>
	        </tr>
	        <tr >
	        	
	            <th class="center" style="text-align:right!important"><?php echo $model->getAttributeLabel('pf_noi_lam_viec')?></th>
	            <td>
	            <?php
		        	$noilamviec = PF_Noilamviec::model()->findAllByAttributes(array('pf_ma_muc_tieu'=>$model->pf_ma_muc_tieu));
		        	
		        	foreach ($noilamviec as $key ) {
		        		$tinhthanh = DC_Tinhthanh::model()->findAllByAttributes(array('ma_tinh_thanh'=>$key->ma_tinh_thanh));
		        		foreach ($tinhthanh as $key1) {
		        			echo ($key1->ten_tinh_thanh);
		        		}
		        	}
				?>
	            </td>
	        </tr>
	    </tbody>
	</table>
</div>
