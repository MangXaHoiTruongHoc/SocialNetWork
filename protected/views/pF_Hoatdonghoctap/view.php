<?php
/* @var $this PF_HoatdonghoctapController */
/* @var $model PF_Hoatdonghoctap */

$this->breadcrumbs=array(
	'Pf  Hoatdonghoctaps'=>array('index'),
	$model->pf_ma_hdht,
);

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

<div class="widget hdht<?php echo $model->pf_ma_hdht ?>">
	<table class="table">
		<tbody>
	        <tr >
	            <th class="center col-md-3" style="text-align:right!important"><?php echo $model->getAttributeLabel('pf_ten_hoat_dong')?></th>
	            <td><?php echo $model->pf_ten_hoat_dong?>
	            <?php
	            	if(isset(yii::app()->session['matk2'])){
                      echo  "<a style='float: right' href='#modal-danhgia{$model->pf_ma_hdht}'  data-toggle='modal'>Đánh giá</a>";
		            }else{
		                //Delete hoạt động học tập      
		                $deleteajax= CHtml::ajaxLink('Xóa',
		                "index.php?r=pf_hoatdonghoctap/delete&id=$model->pf_ma_hdht",
		                array(
		                                'type'=>'post',
		                                'data' => null,
		                                'success' => 'function(){
		                                    alert("Xóa thành công");
		                                    $(".hdht'.$model->pf_ma_hdht.'").
		                                    slideUp("slow",function(){$(".hdht'.$model->pf_ma_hdht.'").remove();});
		                                }'
		                ),
		                array( 'confirm'=>'Ban muon xoa chu',));
		                //Kiem tra nguoi dùng để ẩn hiện action
		                echo "<div class='re_up' style='float: right; display:display'>
		                            
		                            <a href='index.php?r=pf_hoatdonghoctap/update&id={$model->pf_ma_hdht}'>Sửa</a> 
		                            {$deleteajax} </div>";
		            }
			    ?>	
	            </td>
	        </tr>
	        <tr >
	            <th class="center" style="text-align:right!important"><?php echo $model->getAttributeLabel('pf_ngay_bat_dau')?></th>
	            <td><?php echo $model->pf_ngay_bat_dau?></td>
	        </tr>
	        <tr >
	            <th class="center" style="text-align:right!important"><?php echo $model->getAttributeLabel('pf_ngay_ket_thuc')?></th>
	            <td><?php echo $model->pf_ngay_ket_thuc?></td>
	        </tr>
	        <tr >
	            <th class="center" style="text-align:right!important"><?php echo $model->getAttributeLabel('pf_vai_tro')?></th>
	            <td><?php echo $model->pf_vai_tro?></td>
	        </tr>
	        <tr >
	            <th class="center" style="text-align:right!important"><?php echo $model->getAttributeLabel('pf_mo_ta')?></th>
	            <td><?php echo $model->pf_mo_ta?></td>
	        </tr>
	        <?php
	        $images = PF_Hinhanhhdht::model()->findAllByAttributes(array('pf_ma_hdht'=>$model->pf_ma_hdht));
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
	                    		// Thực hiện vòng lặp lấy tất cả hình của theo mã hdht
	                    	foreach ($images as $image) {
	                    		$image->pf_hinh_anh_hdht;
	                    	
	                    	?>
	                        <li class="col-md-3 hidden-phone">
	                            <a class="thumb" href="<?php echo Yii::app()->baseUrl; ?>/upload/hdht/<?php echo $image->pf_hinh_anh_hdht;?>"
	                            data-gallery="gallery">
	                                <img style="height:135px!important"src="<?php echo Yii::app()->baseUrl;?>/upload/hdht/<?php echo $image->pf_hinh_anh_hdht;?>"
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
<!-- Đánh Giá Form -->
<div class="modal fade" id="modal-danhgia<?php echo $model->pf_ma_hdht?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal heading -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title">Đánh giá hoạt động ngoại khóa</h3>
            </div>
            <!-- // Modal heading END -->
            <!-- Modal body -->
            <div class="modal-body">
                <div class="innerAll">
                    <div class="innerLR">
                        
                               <?php $form=$this->beginWidget('CActiveForm', array(
                                'id'=>'taikhoan-form',
                                // Please note: When you enable ajax validation, make sure the corresponding
                                // controller action is handling ajax validation correctly.
                                // There is a call to performAjaxValidation() commented in generated controller code.
                                // See class documentation of CActiveForm for details on this.
                                'action'=>Yii::app()->createUrl('//pf_danhgiahoso/create'),
                                'enableAjaxValidation'=>false,
                                'htmlOptions' => array(
                                    'enctype' => 'multipart/form-data',
                                    'class'=>'form-horizontal margin-none','autocomplete'=>'off'
                                ),
                                'enableClientValidation'=>true,
                                'clientOptions'=>array(
                                    'validateOnSubmit'=>true,
                                ),
                                )); 
                                ?>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Hoạt động Học Tập</label>
                                <div class="col-sm-10">
                                    <input  name='PF_Danhgiahoso[pf_ma_hdht]' class="form-control" id="inputEmail3" value="<?php echo $model->pf_ma_hdht?>"  readonly >
                                </div>
                            </div>
                            <?php
                            if(isset(yii::app()->session['matk2'])){
                                $email = Taikhoan::model()->findAllByAttributes(array('ma_tai_khoan'=>yii::app()->session['ma_tai_khoan']));
                                foreach ($email as $e) {
                                    $e->email;
                                }
                            ?>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name='PF_Danhgiahoso[email]' class="form-control" id="inputEmail3" value="<?php echo  $e->email;?>" placeholder="Email" readonly >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="NoiDung" class="col-sm-2 control-label">Nội Dung</label>
                                <div class="col-sm-10">
                                    <textarea name="PF_Danhgiahoso[pf_noi_dung]" rows="6" cols="50" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Gửi</button>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                       <?php $this->endWidget(); ?>
                    </div>
                </div>
            </div>
            <!-- // Modal body END -->
        </div>
    </div>
</div>     
