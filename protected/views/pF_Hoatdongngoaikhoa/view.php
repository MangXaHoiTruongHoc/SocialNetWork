<?php
/* @var $this PF_HoatdongngoaikhoaController */
/* @var $model PF_Hoatdongngoaikhoa */

$this->breadcrumbs=array(
	'Pf  Hoatdongngoaikhoas'=>array('index'),
	$model->pf_ma_hdnk,
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
<div class="widget hdnk<?php echo $model->pf_ma_hdnk ?>">
	<table class="table">
		<tbody>
	        <tr >
	            <th class="center col-md-3" style="text-align:right!important"><?php echo $model->getAttributeLabel('pf_ten_hoat_dong')?></th>
	            <td><?php echo $model->pf_ten_hoat_dong?>
	            <?php
	            	//Đếm số lượt đánh giá theo mã hoạt động ngoại khóa
	            	$danhgia  = PF_Danhgiahoso::model()->findAllByAttributes(array('pf_ma_hdnk'=>$model->pf_ma_hdnk),array('order'=>'pf_ma_danh_gia_ho_so DESC'));
                    $count  = count($danhgia);
	            	if(isset(yii::app()->session['matk2'])){
                      echo  "
                      <span style='float: right;margin-left:7px' class='badge badge-primary badge-stroke'>
                      <a href='#modal-showdanhgia{$model->pf_ma_hdnk}'  data-toggle='modal'>{$count}</a></span>
                      <a style='float: right' href='#modal-danhgia{$model->pf_ma_hdnk}'  data-toggle='modal'>Đánh giá</a>";
		            }else{
		                //Delete hoạt động ngoại khóa      
		                $deleteajax= CHtml::ajaxLink('Xóa',
		                "index.php?r=pf_hoatdongngoaikhoa/delete&id=$model->pf_ma_hdnk",
		                array(
		                                'type'=>'post',
		                                'data' => null,
		                                'success' => 'function(){
		                                    alert("Xóa thành công");
		                                    $(".hdnk'.$model->pf_ma_hdnk.'").
		                                    slideUp("slow",function(){$(".hdnk'.$model->pf_ma_hdnk.'").remove();});
		                                }'
		                ),
		                array( 'confirm'=>'Ban muon xoa chu',));
		                //Kiem tra nguoi dùng để ẩn hiện action
		                echo "<div class='re_up' style='float: right; display:display'>
		                            <span style='float: right;margin-left:7px' class='badge badge-primary badge-stroke'>
		                            <a href='#modal-showdanhgia{$model->pf_ma_hdnk}'  data-toggle='modal'>{$count}</a></span>
		                            <a href='index.php?r=pf_hoatdongngoaikhoa/update&id={$model->pf_ma_hdnk}'>Sửa</a> 
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
	        $images = PF_Hinhanhhdnk::model()->findAllByAttributes(array('pf_ma_hdnk'=>$model->pf_ma_hdnk));
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
	                    	// Thực hiện vòng lặp lấy tất cả hình của theo mã hdnk
	                    	foreach ($images as $image) {
	                    		$image->pf_hinh_anh_hdnk;
	                    	
	                    	?>
	                        <li class="col-md-3 hidden-phone">
	                            <a class="thumb" href="<?php echo Yii::app()->baseUrl; ?>/upload/hdnk/<?php echo $image->pf_hinh_anh_hdnk;?>"
	                            data-gallery="gallery">
	                                <img style="height:135px!important"src="<?php echo Yii::app()->baseUrl;?>/upload/hdnk/<?php echo $image->pf_hinh_anh_hdnk;?>"
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
<div class="modal fade" id="modal-danhgia<?php echo $model->pf_ma_hdnk?>">
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
                                <label for="inputEmail3" class="col-sm-2 control-label">Hoạt động ngoại khóa</label>
                                <div class="col-sm-10">
                                    <input  name='PF_Danhgiahoso[pf_ma_hdnk]' class="form-control" id="inputEmail3" value="<?php echo $model->pf_ma_hdnk?>" placeholder="Email" readonly >
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
<!-- Show tabel đánh giá -->  
<div class="modal fade" id="modal-showdanhgia<?php echo $model->pf_ma_hdnk?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal heading -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title">Danh sách người đánh giá</h3>
            </div>
            <!-- // Modal heading END -->
            <!-- Modal body -->
            <div class="modal-body">
                <div class="innerAll">
                    <div class="innerLR">
                    	    <table class="dynamicTable scrollVertical table table-primary">
                                <!-- Table heading -->
                                <thead>
                                    <tr>
                                        <th>Khách xem</th>
                                    </tr>
                                </thead>
                                <!-- // Table heading END -->
                                <!-- Table body -->
                                <tbody>
                                    <!-- Table row -->
                                    <?php
                                    foreach ($danhgia as $key) {
                                        $imagekhach = Taikhoan::model()->findAllByAttributes(array('email'=>$key->email));
                                        foreach ($imagekhach as $img ) {
                                    ?>
                                    <tr class="gradeX">
                                        <td>
                                        <div class="media  innerAll margin-none">
	                                        <img style="width:35px;height:35px" src="/yii/SocialNetWork/upload/avarta/<?php echo $img->hinh_dai_dien?>" class="pull-left media-object">
	                                        <div class="media-body">
	                                            <h5 class="margin-none"><a href="" class="text-inverse"><?php echo $img->ho_ten; ?></a>
	                                            </h5>
	                                            <small><?php echo $key->pf_noi_dung?></small>
	                                    	</div>
                                    	</div>
                                        </td>
                                    </tr>
                                    <?php

                                     }

                                	}
                                    ?>
                                    <!-- // Table row END -->
                                </tbody>
                                <!-- // Table body END -->
                            </table>
                    </div>
                </div>
            </div>
            <!-- // Modal body END -->
        </div>
    </div>
</div> 