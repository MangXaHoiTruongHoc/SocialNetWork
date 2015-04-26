<?php
/* @var $this HT_TailieuController */
/* @var $model HT_Tailieu */

$this->breadcrumbs=array(
	'Ht  Tailieus'=>array('index'),
	$model->ht_ma_tai_lieu,
);

$this->menu=array(
	array('label'=>'Danh Mục Tài Liệu', 'url'=>array('index')),
	//array('label'=>'Create HT_Tailieu', 'url'=>array('create')),
	//array('label'=>'Update HT_Tailieu', 'url'=>array('update', 'id'=>$model->ht_ma_tai_lieu)),
	//array('label'=>'Delete HT_Tailieu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ht_ma_tai_lieu),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage HT_Tailieu', 'url'=>array('admin')),
);


?>
<h1 style="font-weight:bold;background-color:#209488; color:#ffffff" class="text-center" ><?php echo $model->tieu_de; ?></h1>
<!--Đánh giá tài liệu-->
<div>
    <h3 style="margin-top:-5px;" class="mo_ta_tai_lieu">
        <span style= "font-size: 18px;line-height: 20.7999992370605px; color:grey"><?php echo $model->gioi_thieu; ?>
        </span>
    </h3>
    <b style="float: left;">Thể loại: <?php echo $model->ht_ma_the_loai; ?></b> 
    <br>
    <br>
        <img title="Số Trang" src="/images/icon/page.png" style="vertical-align: text-bottom;margin-right:1px; width: 16px;">
        <span style="color: #F10000"><?php echo $model->so_trang ?>
        </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img title="Người chia sẻ" src="/images/icon/share.png" style="vertical-align: text-bottom;margin-right:1px; width: 18px;">
        <span style="color: #0000FF">
            <a title="Phạm Văn Đức" href="http://tailieuhoctap.vn/index.php?option=com_community&amp;view=profile&amp;userid=5655&amp;Itemid=106">Phạm Văn Đức
            </a>
        </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img title="Ngày cập nhật" src="/images/icon/date.png" style="width: 18px; vertical-align: text-bottom;margin-right:1px">
        <span style="color: #F10000">06/12/2013
        </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img title="Lượt xem" style="vertical-align: text-bottom;margin-right:1px; width: 18px;" src="/images/icon/view.png">
        <span style="color: #F10000">22.734
        </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img title="Lượt tải" src="/images/icon/down.png" style="vertical-align: text-bottom;margin-right:1px; width: 18px;">
        <span id="so_lan_tai" style="color: #F10000">4.618
        </span>
        <br>
        <br>
        <!--Đánh giá-->
        <div class="text-center">
            <span style="float: left;font-size: 18px; color:grey;margin-left:10px">Đánh giá của bạn:</span>
            <div class="rating text-medium text-faded margin-top-none" style="float:left;margin-left:10px">
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star active"></span>
                <span class="star"></span>
            </div>
        </div>
        <div class="border-top innerAll">
            <div class="pull-left">
                <span style="float: left;font-size: 18px; color:grey">Đánh giá bởi:</span>
                <img src="/yii/mangxahoi/themes/blackboot/css/images/people/35/13.jpg" class="img-circle pull-left innerR half" style="width: auto; height: auto; display: block; margin-left: auto; margin-right: auto;">
                <img src="/yii/mangxahoi/themes/blackboot/css/images/people/35/10.jpg" class="img-circle pull-left innerR half" style="width: auto; height: auto; display: block; margin-left: auto; margin-right: auto;">
                <img src="/yii/mangxahoi/themes/blackboot/css/images/people/35/18.jpg" class="img-circle pull-left innerR half" style="width: auto; height: auto; display: block; margin-left: auto; margin-right: auto;">
                <img src="/yii/mangxahoi/themes/blackboot/css/images/people/35/1.jpg" class="img-circle pull-left innerR half" style="width: auto; height: auto; display: block; margin-left: auto; margin-right: auto;">
                <img src="/yii/mangxahoi/themes/blackboot/css/images/people/35/23.jpg" class="img-circle pull-left innerR half" style="width: auto; height: auto; display: block; margin-left: auto; margin-right: auto;">
            </div>
        
        </div>
        <div class="ribbon-wrapper">
            <div class="ribbon primary"><i class="fa fa-fw fa-star-o "></i>
                <strong>điểm</strong>
            </div>
        </div>
        <div class="clearfix"></div>
    </div> 
<div class="text-right innerTB">
        <a href="#modal-xoa" class="btn btn-primary" data-toggle='modal'>Xóa</a>
        <a href="#modal-capnhattailieu" class="btn btn-primary" data-toggle='modal'>Cập Nhật</a>
        <a class="btn btn-primary" >Tải Về</a>
</div>

<!--Xác nhận xóa tài liệu-->
<div class="modal fade" id="modal-xoa">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal heading -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="bootbox-body" style="font-weight:bold">Xóa Tài Liệu</div>
                </div>
                <!-- Modal heading END -->
                <!-- Modal body -->
                    <div class="modal-body">
                        <div class="innerAll">
                            <div class="innerLR">
                                 <div class="text-center">Bạn chắc chắn muốn xóa tài liệu này?</div>
                                 
                            </div>
                        </div>
                        <div class="ui2" style="display:none">
                            <a href="javascript:;" class="niceBtn close-link"></a>
                        </div>
                    </div>
                <!-- Modal body END -->
                <!-- Modal footer -->
                	<div class="modal-footer">
                        <?php 
                            $form=$this->beginWidget('CActiveForm', 
                               array('id'=>'ht-tailieu-form-delete',
                                     // Please note: When you enable ajax validation, make sure the corresponding
                                     // controller action is handling ajax validation correctly.
                                     // There is a call to performAjaxValidation() commented in generated controller code.
                                     // See class documentation of CActiveForm for details on this.
                                     'enableAjaxValidation'=>false,
                                     'action'=>Yii::app()->createUrl('//HT_Tailieu/delete&id='.$model->ht_ma_tai_lieu),
                                     'htmlOptions' => array('enctype' => 'multipart/form-data','class'=>'form-horizontal')
                                    )
                               );               
                            
                            ?>
                            <?php echo $form->errorSummary($model); ?>
                            <button data-bb-handler="confirm" type="submit" class="btn btn-primary">Có</button>
                            <a  href="#" class="btn btn-default load_lai">Không</a>
                         <?php $this->endWidget(); ?>
                	</div>
            </div>
        </div>
</div>
<!--Cập nhật tài liệu-->
<div class="modal fade" id="modal-capnhattailieu">
            <div class="modal-dialog">
                <div class="modal-content">
                <!-- Modal heading -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3 class="modal-title">Xác nhận thông tin tài liệu</h3>
                    </div>
                <!-- Modal heading END -->
                <!-- Modal body -->
                        <div class="modal-body">
                            <div class="innerAll">
                                <div class="innerLR">

                                    <?php 
                                        $form=$this->beginWidget('CActiveForm', 
                                           array('id'=>'ht--tailieu-form',
                                                 // Please note: When you enable ajax validation, make sure the corresponding
                                                 // controller action is handling ajax validation correctly.
                                                 // There is a call to performAjaxValidation() commented in generated controller code.
                                                 // See class documentation of CActiveForm for details on this.
                                                 'enableAjaxValidation'=>false,
                                                 'action'=>Yii::app()->createUrl('//HT_Tailieu/update&id='.$model->ht_ma_tai_lieu),
                                                 'htmlOptions' => array('enctype' => 'multipart/form-data')
                                                )
                                           ); 
                                        
                                        
                        
                                    ?>
                                    <!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->
                                    <?php echo $form->errorSummary($model); 

                                    ?>
                                    <div class='widget'>
                                        <!-- Widget heading -->
                                        <div class="widget-body innerAll inner-2x">
                                            <div class="row innerLR">
                                            <!-- Nhập tiêu đề -->
                                                <div class="form-group">
                                                    <?php echo $form->labelEx($model,'tieu_de', array('class'=>'col-md-4 control-label'));?>
                                                        <div class="col-md-6">
                                                            <?php echo $form->textField($model,'tieu_de',array('class'=>'form-control','size'=>40,'maxlength'=>100, 'required'=>'true' )); ?>
                                                        </div>
                                                    <?php echo $form->error($model,'tieu_de'); ?>
                                                </div>
                        
                                            <!-- Tên tài liệu -->
                                                <div class="form-group">
                                                    <?php echo $form->labelEx($model,'ten_tai_lieu', array('class'=>'col-md-4 control-label')); ?>
                                                        <div class="col-md-6">
                                                            <?php echo $form->textField($model,'ten_tai_lieu',array('class'=>'form-control','size'=>60,'maxlength'=>100)); ?>
                                                        </div>
                                                    <?php echo $form->error($model,'ten_tai_lieu'); ?>
                                                </div>
                                            <!-- Nhập thể loại-->
                                                <?php
                                                    $theloai = HT_Theloaitl::model()->findAll();
                                                    $list = array();
                                                    foreach ($theloai as $t) {
                                                        $list[$t->ht_ma_the_loai] = $t->ten_the_loai;
                                                    }

                                                ?>
                                                <div class="form-group">
                                                    <?php echo $form->labelEx($model, 'ht_ma_the_loai', array('class'=>'col-md-4 control-label')); ?>
                                                    <div class="col-md-6">
                                                        <?php echo $form->DropDownList($model, 'ht_ma_the_loai', $list, array('class'=>'form-control','empty' => 'Chọn thể loại')); ?>
                                                    </div>
                                                    <?php echo $form->error($model, 'ht_ma_the_loai'); ?>
                                                </div>
                                            <!-- Nhập nhóm tài liệu-->
                                                <?php
                                                    $nhomtl = HT_Nhomtailieu::model()->findAll();
                                                    $list = array();
                                                    foreach ($nhomtl as $t) {
                                                        $list[$t->ht_ma_nhom_tl] = $t->ten_nhom_tl;
                                                    }

                                                ?>
                                                <div class="form-group">
                                                    <?php echo $form->labelEx($model, 'ht_ma_nhom_tl', array('class'=>'col-md-4 control-label')); ?>
                                                    <div class="col-md-6">
                                                        <?php echo $form->DropDownList($model, 'ht_ma_nhom_tl', $list, array('class'=>'form-control','empty' => 'Chọn nhóm tài liệu')); ?>
                                                    </div>
                                                    <?php echo $form->error($model, 'ht_ma_nhom_tl'); ?>
                                                </div>
                                            <!-- Nhập số trang -->
                                                <div class="form-group">
                                                    <?php echo $form->labelEx($model,'so_trang', array('class'=>'col-md-4 control-label'));?>
                                                        <div class="col-md-6">
                                                            <?php echo $form->textField($model,'so_trang',array('class'=>'form-control','size'=>60,'maxlength'=>100)); ?>
                                                        </div>
                                                    <?php echo $form->error($model,'so_trang'); ?>
                                                </div>
                                            <!-- Nhập tác giả -->
                                                <div class="form-group">
                                                    <?php echo $form->labelEx($model,'tac_gia',array('class'=>'col-md-4 control-label'));?>
                                                        <div class="col-md-6">
                                                            <?php echo $form->textField($model,'tac_gia',array('class'=>'form-control','size'=>50,'maxlength'=>50)); ?>
                                                        </div>
                                                    <?php echo $form->error($model,'tac_gia'); ?>
                                                </div>
                                            <!-- Nhập nhà xuất bản -->
                                                <div class="form-group">
                                                    <?php echo $form->labelEx($model,'nha_xuat_ban',array('class'=>'col-md-4 control-label'));?>
                                                        <div class="col-md-6">
                                                            <?php echo $form->textField($model,'nha_xuat_ban',array('class'=>'form-control','size'=>50,'maxlength'=>50)); ?>
                                                        </div>
                                                    <?php echo $form->error($model,'nha_xuat_ban'); ?>
                                                </div>
                                            <!-- Nhập giới thiệu -->
                                                <div class="form-group">
                                                    <?php echo $form->labelEx($model,'gioi_thieu',array('class'=>'col-md-4 control-label')); ?>
                                                    <div class="col-md-6">
                                                        <?php echo $form->textarea($model,'gioi_thieu',array('class'=>'form-control','rows'=>6, 'cols'=>50,'maxlength'=>255)); ?>
                                                    </div>
                                                    <?php echo $form->error($model,'gioi_thieu'); ?>
                                                </div>
                                            <!-- Chọn file -->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="">Files</label>
                                                        <div class="col-md-6">
                                                                <?php $this->widget('CMultiFileUpload', 
                                                                        array('model'=>$model,
                                                                              'name' => 'files',
                                                                              'attribute'=>'files',
                                                                              'max'=>5,
                                                                              'id'=>'fileupload',
                                                                              'accept' => 'doc|xlsx|pdf', // useful for verifying files
                                                                              'duplicate' => 'Duplicate file!', // useful, i think
                                                                              'denied' => 'Invalid file type', // useful, i think
                                                                              'htmlOptions' => array( 'multiple' => 'multiple'),));
                                                                ?>
                                                            
                                                        </div>
                                                </div>
                                            <!-- Lưu toàn bộ thông tin về tài liệu -->
                                                <div class="form-actions col-md-8">
                                                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Hoàn thành' : 'Save',array('class'=>'btn btn-primary', 'id' => 'tailen','style'=>'float:center')); 
                                                    ?>
                            
                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                        <?php $this->endWidget(); ?>
                                    </div>
                            </div>
                            <div class="ui2" style="display:none">
                                <!--<div>File</div>-->
                                <a href="javascript:;" class="niceBtn close-link"></a>
                                <div class="uploaderLs">
                                </div>
                            </div>
                        </div>
                <!-- Modal body END -->
                </div>
            </div>
</div>
<!--Bình luận tài liệu-->
<div style ="font-weight:bold;background-color: #E9F7F5; padding: 5px" >Bình luận</div>
<div class="box-generic">
    <div class="media innerAll  bg-gray margin-none">
        <a class="pull-left" href="#">
            <img src="../assets/images/people/80/8.jpg" alt="photo" class="media-object" width="35">
        </a>
        <div class="media-body">
            <a href="" class="strong text-inverse">Andrew</a> Good
            Job. Congrats and hope to see more
            admin templates like this in the
            future.
            <div class="timeline-bottom">
                <i class="fa fa-clock-o"></i> 2
                days ago
            </div>
        </div>
    </div>
    <div class="media innerAll margin-none bg-gray border-top border-bottom">
        <a class="pull-left" href="#">
            <img src="../assets/images/people/80/2.jpg" alt="photo" width="35" class="media-object">
        </a>
        <div class="media-body">
            <a href="" class="strong text-inverse">mosaicpro</a> Thanks,
            I apreciate it!
            <div class="timeline-bottom">
                <i class="fa fa-clock-o"></i> 5
                days ago
            </div>
        </div>
    </div>
    <div class="text-center">
         <?php 
            $form=$this->beginWidget('CActiveForm', 
               array('id'=>'ht-binhluan-form-create',
                     // Please note: When you enable ajax validation, make sure the corresponding
                     // controller action is handling ajax validation correctly.
                     // There is a call to performAjaxValidation() commented in generated controller code.
                     // See class documentation of CActiveForm for details on this.
                     'enableAjaxValidation'=>false,
                     'action'=>Yii::app()->createUrl('//dc_binhluan/create'),
                     'htmlOptions' => array('enctype' => 'multipart/form-data','class'=>'form-horizontal')
                    )
               );               
            $modelcoment=new DC_Binhluan();
            ?>
            <?php echo $form->errorSummary($modelcoment); ?>
            <?php echo $form->hiddenField($modelcoment,'ma_tai_khoan',array('size'=>'50','value'=>Yii::app()->session['ma_tai_khoan']));  ?>
            <?php echo $form->hiddenField($modelcoment,'ht_ma_tai_lieu',array('size'=>'50','value'=>$model->ht_ma_tai_lieu));  ?>
            
            <?php echo $form->textarea($modelcoment,'noi_dung',array('class'=>'form-control','row'=>5,'maxlength'=>100,'placeholder'=>'Comment here...')); ?>
            <button style="float:right" data-bb-handler="confirm" type="submit" class="btn btn-primary">Bình luận</button>
         <?php $this->endWidget(); ?>
        
    </div>
</div>

