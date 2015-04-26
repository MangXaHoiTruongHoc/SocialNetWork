<?php
/* @var $this HT_TailieuController */
/* @var $dataProvider CActiveDataProvider */
/* @var $model HT_Tailieu */
$this->breadcrumbs=array(
	'Ht  Tailieus',
);

$this->menu=array(
    //<input type="text" class="form-control" placeholder="Search">
//	array('label'=>'Danh Mục Tài Liệu', 'url'=>array('create')),
//	array('label'=>'Manage HT_Tailieu', 'url'=>array('admin')),
);
?>  
    <div class="text-right innerTB">
         <a href="#modal-capnhattailieu" class="btn btn-primary" data-toggle='modal'>Tạo Tài Liệu</a>
    </div>
    
    <?php 

    $this->widget('zii.widgets.CListView', 
                        array('dataProvider'=>$dataProvider,'itemView'=>'_view',)); 

    ?>

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
                                                                         'action'=>Yii::app()->createUrl('//HT_Tailieu/create'),
                                                                         'htmlOptions' => array('enctype' => 'multipart/form-data','class'=>'form-horizontal')
                                                                        )
                                                                   ); 
                                        
                                        $model =new HT_Tailieu;
                    
                                    ?>
                                    <!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->
                                    <?php echo $form->errorSummary($model); ?>
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
                                                            <?php echo $form->numberField($model,'so_trang',array('class'=>'form-control','size'=>60,'maxlength'=>100)); ?>
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
<script type="text/javascript" src="/yii/MangXaHoi/assets/socialajax/upload.js"></script>
    <!-- Modal END -->

                                    