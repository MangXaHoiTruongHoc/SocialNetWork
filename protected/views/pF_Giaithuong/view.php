<?php
/* @var $this PF_GiaithuongController */
/* @var $model PF_Giaithuong */

$this->breadcrumbs=array(
	'Pf  Giaithuongs'=>array('index'),
	$model->pf_ma_giai_thuong,
);

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

 <?php //$this->widget('zii.widgets.CDetailView', array(
// 	'data'=>$model,
// 	'attributes'=>array(
// 		'pf_ma_giai_thuong',
// 		'pf_ten_giai_thuong',
// 		'pf_ngay_nhan_giai',
// 		'pf_mo_ta',
// 		'ma_tai_khoan',
// 	),
// )); ?>
<div class="widget giaithuong<?php echo $model->pf_ma_giai_thuong ?>">
	<table class="table">
		<tbody>
	        <tr >
	            <th class="center col-md-3" style="text-align:right!important"><?php echo $model->getAttributeLabel('pf_ten_giai_thuong')?></th>
	            <td><?php echo $model->pf_ten_giai_thuong?>
	            <?php
	            	if(!isset(yii::app()->session['matk2'])){
		                //Delete hoạt động ngoại khóa      
		                $deleteajax= CHtml::ajaxLink('Xóa',
		                "index.php?r=pf_giaithuong/delete&id=$model->pf_ma_giai_thuong",
		                array(
		                                'type'=>'post',
		                                'data' => null,
		                                'success' => 'function(){
		                                    alert("Xóa thành công");
		                                    $(".giaithuong'.$model->pf_ma_giai_thuong.'").
		                                    slideUp("slow",function(){$(".giaithuong'.$model->pf_ma_giai_thuong.'").remove();});
		                                }'
		                ),
		                array( 'confirm'=>'Ban muon xoa chu',));
		                //Kiem tra nguoi dùng để ẩn hiện action
		                echo "<div class='re_up' style='float: right; display:display'>
		                            
		                            <a href='index.php?r=pf_giaithuong/update&id={$model->pf_ma_giai_thuong}'>Sửa</a> 
		                            {$deleteajax} </div>";
		            }
			    ?>	
	            </td>
	        </tr>
	        <tr >
	            <th class="center" style="text-align:right!important"><?php echo $model->getAttributeLabel('pf_ngay_nhan_giai')?></th>
	            <td><?php echo $model->pf_ngay_nhan_giai?></td>
	        </tr>
	        <tr >
	            <th class="center" style="text-align:right!important"><?php echo $model->getAttributeLabel('pf_mo_ta')?></th>
	            <td><?php echo $model->pf_mo_ta?></td>
	        </tr>
	        <?php
	        $images = PF_Hinhanhgiaithuong::model()->findAllByAttributes(array('pf_ma_giai_thuong'=>$model->pf_ma_giai_thuong));
	        if(count($images) > 0){
	        ?>
	       <tr>
	       <td colspan="2" style="height:175px">
	       	<div class="widget widget-heading-simple widget-body-white margin-none">
	            <div class="widget-body">
	               
	                <!-- Gallery Layout -->
	                <div class="gallery gallery-2">
	                    <ul class="row" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-4"
	                    data-delegate="#gallery-4">
	                    	<?php
	                    	// Thực hiện vòng lặp lấy tất cả hình của theo mã giaithuong
	                    	foreach ($images as $image) {
	                    		$image->pf_hinh_anh_gt;
	                    	
	                    	?>
	                        <li class="col-md-3 hidden-phone">
	                            <a class="thumb" href="<?php echo Yii::app()->baseUrl; ?>/upload/giaithuong/<?php echo $image->pf_hinh_anh_gt;?>"
	                            data-gallery="gallery">
	                                <img style="height:135px!important"src="<?php echo Yii::app()->baseUrl;?>/upload/giaithuong/<?php echo $image->pf_hinh_anh_gt;?>"
	                                alt="photo"
	                                class="img-responsive"
	                                />
	                            </a>
	                        </li>
	                        <?php
	                        	}
	                        ?>
	                    </ul>
	                </div>
	            </div>
	        </div>
	        <!-- Blueimp Gallery -->
	        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
	            <div class="slides"></div>
	            <h3 class="title"></h3>
	            <a class="prev no-ajaxify">‹</a>
	            <a class="next no-ajaxify">›</a>
	            <a class="close no-ajaxify">×</a>
	        </div>
	        <!-- // Blueimp Gallery END -->
	       </td>
	       </tr>
	       <?php
	   		}
	       ?>
	    </tbody>
	</table>
</div>