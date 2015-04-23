<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 "> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 "> <![endif]-->
<!--[if gt IE 8]> <html class="ie "> <![endif]-->
<!--[if !IE]><!-->
<html class="">
<!-- <![endif]-->
<head>
    <title>Social Admin Template (v1.0.1-rc2)</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <!-- 
    **********************************************************
    In development, use the LESS files and the less.js compiler
    instead of the minified CSS loaded by default.
    **********************************************************
    <link rel="stylesheet/less" href="../assets/less/admin/module.admin.stylesheet-complete.less" />
    -->
    <!--[if lt IE 9]><link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/module.admin.stylesheet-complete.min.css"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/library/jquery/jquery.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/library/jquery/jquery-migrate.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/library/modernizr/modernizr.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/plugins/less-js/less.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script type="text/javascript" src="/yii/SocialNetWork/assets/socialajax/check_email.js"></script>
    <script>
    if ( /*@cc_on!@*/ false && document.documentMode === 10)
    {
        document.documentElement.className += ' ie ie10';
    }
    </script>
</head>
<body class="">
    <!-- Main Container Fluid -->
    <div class="container-fluid ">
        <!-- Content START -->
        <div id="content">
            <!-- <div class="layout-app col-fs">  -->
            <div class="container" >
                <div class="layout-app col-fs">
                    <div class="row row-app">
                        <div class="col-md-12" >
                            <div class="col-separator col-separator-first box col-unscrollable col-fs">
                                <div class="col-table">
                                    <div class="col-table-row">
                                        <div class="col-app col-unscrollable tab-content" style="background-image: url(<?php echo Yii::app()->theme->baseUrl; ?>/css/images/lock-1.jpg);">
                                            <div class="col-app lock-wrapper lock-bg-1 tab-pane active animated fadeIn" id="lock-1-1">
                                                <h3 class="text-white innerB text-center">Đăng Nhập</h3>
                                                <div class="lock-container">
                                                    <div class="innerAll text-center">
                                                       <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/100/22.jpg" class="img-circle" />
                                               <!--         <div class="innerLR">
                                                            <input class="form-control text-center bg-gray" type="text" placeholder="Username"
                                                            />
                                                            <input class="form-control text-center bg-gray" type="password" placeholder="Enter Password"
                                                            />
                                                        </div>
                                                        <div class="innerT">
                                                            <a href="index.html?lang=en" class="btn btn-primary">Login <i class="fa fa-fw fa-unlock-alt"></i></a>
                                                        </div> -->
                                                        <?php echo $content ?>
                                                        <a href="" class="btn margin-none">Quên Mật Khẩu?</a>
                                                        <a href="#modal-dangki" class="btn margin-none" data-toggle='modal'>Đăng Kí Tài Khoản!!!</a>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="modal-dangki">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <!-- Modal heading -->
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                        <h3 class="modal-title">Đăng Kí Tài Khoản</h3>
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
                                                                                        'action'=>Yii::app()->createUrl('//taikhoan/register'),
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
                                                                                        $model= new Taikhoan;
                                                                                    ?>
                                                                                     <div class="form-group">
                                                                                        <?php echo $form->labelEx($model,'email',array('class'=>'col-md-4 control-label')); ?>
                                                                                        <div class='col-md-6'>
                                                                                        <?php echo $form->emailField($model,'email',array('class'=>'form-control','id'=>'email','size'=>50,'maxlength'=>50)); ?>
                                                                                        <span id ="available"></span>
                                                                                        </div>
                                                                                        <?php echo $form->error($model,'email'); ?>
                                                                                    </div>
                                                                                    
                                                                                    <div class="form-group">
                                                                                        <?php echo $form->labelEx($model,'ho_ten',array('class'=>'col-md-4 control-label')); ?>
                                                                                        <div class='col-md-6'>
                                                                                        <?php echo $form->textField($model,'ho_ten',array('class'=>'form-control','size'=>50,'maxlength'=>50,'required'=>'true')); ?>
                                                                                        </div>
                                                                                        <?php echo $form->error($model,'ho_ten'); ?>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <?php echo $form->labelEx($model,'ngay_sinh',array('class'=>'col-md-4 control-label')); ?>
                                                                                        <div class='col-md-6'>
                                                                                        <?php echo $form->textField($model,'ngay_sinh',array('class'=>'form-control datepicker1','size'=>10,'maxlength'=>10,'required'=>'true')); ?>
                                                                                        </div>
                                                                                        <?php echo $form->error($model,'ngay_sinh'); ?>
                                                                                    </div>
                                                                                    <div class="form-group" id="text">
                                                                                        <?php echo $form->labelEx($model,'gioi_tinh',array('class'=>'col-md-4 control-label')); ?>
                                                                                        <div class='col-md-6'>
                                                                                        <div class="radio">
                                                                                            <label class="radio-custom">
                                                                                                <input type="radio" name="Taikhoan[gioi_tinh]" value='Nam' checked="checked" >
                                                                                                <i class="fa fa-circle-o checked"></i>Nam
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label class="radio-custom">
                                                                                                <input type="radio" name="Taikhoan[gioi_tinh]" value='Nữ' >
                                                                                                <i class="fa fa-circle-o checked"></i>Nữ
                                                                                            </label>
                                                                                        </div>
                                                                                        </div>
                                                                                        <?php echo $form->error($model,'gioi_tinh'); ?>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <?php echo $form->labelEx($model,'hinh_dai_dien',array('class'=>'col-md-4 control-label')); ?>
                                                                                        <div class='col-md-6 fileupload fileupload-new margin-none' data-provides='fileupload'>
                                                                                            <span class="btn btn-default btn-file">
                                                                                                <span class="fileupload-new">Select file</span>
                                                                                                <span class="fileupload-exists">Change</span>
                                                                                                <?php echo $form->fileField($model,'hinh_dai_dien',array('class'=>'form-control margin-none')) ?>
                                                                                            </span>
                                                                                                <span class="fileupload-preview"></span>
                                                                                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">&times;</a>
                                                                                        </div>
                                                                                        <?php echo $form->error($model,'hinh_dai_dien'); ?>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <?php echo $form->labelEx($model,'mat_khau',array('class'=>'col-md-4 control-label')); ?>
                                                                                        <div class='col-md-6 border-none'>
                                                                                        <?php echo $form->passwordField($model,'mat_khau',array('class'=>'form-control','size'=>32,'maxlength'=>32,'required'=>'true')); ?>
                                                                                        </div>
                                                                                        <?php echo $form->error($model,'mat_khau'); ?>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <div class="col-sm-offset-4 col-sm-10">
                                                                                            <button type="submit" class="btn btn-primary">Đăng Kí</button>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php $this->endWidget(); ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- // Modal body END -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- // Modal END -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Global -->
                <script data-id="App.Config">
                var App = {};
                var basePath = '',
                    commonPath = '../assets/',
                    rootPath = '../',
                    DEV = false,
                    componentsPath = '../assets/components/';
                var primaryColor = '#25ad9f',
                    dangerColor = '#b55151',
                    successColor = '#609450',
                    infoColor = '#4a8bc2',
                    warningColor = '#ab7a4b',
                    inverseColor = '#45484d';
                var themerPrimaryColor = primaryColor;
                </script>
                <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/library/bootstrap/js/bootstrap.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
                <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
                <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/plugins/breakpoints/breakpoints.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
                <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/plugins/preload/pace/pace.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
                <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/plugins/menus/sidr/jquery.sidr.js?v=v1.0.1-rc2"></script>
                <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/core/js/core.init.js?v=v1.0.1-rc2"></script>
                <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/forms/elements/bootstrap-datepicker/assets/lib/js/bootstrap-datepicker.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
                <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/forms/elements/bootstrap-datepicker/assets/custom/js/bootstrap-datepicker.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
                <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/forms/elements/jasny-fileupload/assets/js/bootstrap-fileupload.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
                <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/forms/elements/fuelux-radio/fuelux-radio.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
</body>
</html>