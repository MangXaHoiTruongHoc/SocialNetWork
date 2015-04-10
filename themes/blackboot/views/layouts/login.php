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
            <div class="container">
                <div class="layout-app col-fs">
                    <div class="row row-app">
                        <div class="col-md-12">
                            <div class="col-separator col-separator-first box col-unscrollable col-fs">
                                <div class="col-table">
                                    <div class="col-table-row">
                                        <div class="col-app col-unscrollable tab-content">
                                            <div class="col-app lock-wrapper lock-bg-1 tab-pane active animated fadeIn" id="lock-1-1">
                                                <h3 class="text-white innerB text-center">Account Access</h3>
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
                                                        <a href="" class="btn margin-none">Forgot password?</a> 
                                                       
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
</body>
</html>