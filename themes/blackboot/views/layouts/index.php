<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 footer-sticky"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 footer-sticky"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 footer-sticky"> <![endif]-->
<!--[if gt IE 8]> <html class="ie footer-sticky"> <![endif]-->
<!--[if !IE]><!-->
<html class="footer-sticky">
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
	<link rel="stylesheet/less" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/less/admin/module.admin.stylesheet-complete.less" />
	-->
    <!--[if lt IE 9]><link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/module.admin.stylesheet-complete.min.css" />
    
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
    <script type="text/javascript" src="/yii/SocialNetWork/assets/socialajax/jquery.multifile.js"></script>
    <script type="text/javascript" src="/yii/SocialNetWork/assets/socialajax/socialajax.js"></script>
</head>
<body class=" menu-right-hidden">
    <!-- nonelogin -->
    <?php  

        if(isset(yii::app()->session['email'])){
            
            


    ?>
    <!-- login -->
    <!-- Main Container Fluid -->
    <div class="container-fluid ">
        <!-- start navigation -->
            <nav class="navbar navbar-default top-nav navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle btn btn-default" data-toggle="collapse"
                        data-target="#navbar-fixed-layout-collapse">
                            <i class="fa fa-indent"></i>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css//images/logo/dhkt.jpg" alt="" style="width:40px">
                            <b style="margin-left:7px;font-size:15px">MẠNG XÃ HỘI TRƯỜNG ĐẠI HỌC KINH TẾ</b>
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-fixed-layout-collapse">
                      
                        <form class="navbar-form navbar-left hidden-sm" role="search">
                            <div class="form-group inline-block">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-inverse"><i class="fa fa-search fa-fw"></i>
                            </button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="innerLR">
                                <a href="#" title="">
                                <img style="width:30px; heigth:30px"  src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/icons/message.png" alt="">
                                </a>
                            </li>
                            <li class="innerLR">
                                <a href="#" title="">
                                <img style="width:30px; heigth:30px"  src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/icons/friend.png" alt="">
                                </a>
                            </li>
                            <li class="innerLR">
                                <a href="#" title="">
                                <img style="width:30px; heigth:30px"  src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/icons/notification.png" alt="">
                                </a>
                            </li>
                           <!--  <li class="innerLR">
                                <button type="button" class="btn btn-success navbar-btn"><i class="fa fa-pencil"></i> Sign in</button>
                            </li> -->

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="pull-left innerR">
                                        <?php
                                            $email = Yii::app()->session['email'];
                                            $image= Taikhoan::model()->findAllByAttributes(array('email'=>$email));
                                            foreach ($image as $key ) {
                                                $key->hinh_dai_dien;
                                            }
                                        ?>
                                        <img style="width:30px;heigth:30px;" src="<?php echo Yii::app()->baseUrl; ?>/upload/avarta/<?php echo $key->hinh_dai_dien?>"
                                        alt="user" class="img-circle">
                                    </span>
                                    <?php echo($key->ho_ten) ?> <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php">Profile</a>
                                    </li>
                                    <li><a href="index.php?r=site/home">Home</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="index.php?r=site/logout">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav> <!-- end nav -->

        <!-- Content START -->

        <div id="content">
           

            <!-- <div class="layout-app">  -->
            <div class="container">
                <div class="innerAll">
                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <div class="timeline-cover">
                                <div class="cover">
                                    <div class="top">
                                        <img style="width:851px;height:250px"src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/dhkt/cover.jpg" class="img-responsive"
                                        />
                                    </div>
                                    <!-- <ul class="list-unstyled">
                                        <li class="active"><a href="index.html?lang=en"><i class="fa fa-fw fa-clock-o"></i> <span>Timeline</span></a>
                                        </li>
                                        <li><a href="about_1.html?lang=en"><i class="fa fa-fw fa-user"></i> <span>About</span></a>
                                        </li>
                                        <li><a href="media_1.html?lang=en"><i class="fa fa-fw icon-photo-camera"></i> <span>Photos</span> <small>(102)</small></a>
                                        </li>
                                        <li><a href="contacts_1.html?lang=en"><i class="fa fa-fw icon-group"></i><span> Friends </span><small>(19)</small></a>
                                        </li>
                                        <li><a href="messages.html?lang=en"><i class="fa fa-fw icon-envelope-fill-1"></i> <span>Messages</span> <small>(2 new)</small></a>
                                        </li>
                                    </ul> -->
                                    <?php $this->widget('zii.widgets.CMenu',array(
                                    'htmlOptions' => array( 'class' => 'list-unstyled' ),
                                    'activeCssClass'    => 'active',
                                    'items'=>array(
                                        array('label'=>'Timeline', 'url'=>array('/site/index')),
                                    //  array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                                        array('label'=>'About', 'url'=>array('/Taikhoan/about')),
                                        array('label'=>'Contact', 'url'=>array('/site/contact')),
                                        //array('label'=>'Register', 'url'=>array('/Taikhoan/Create'),'visible'=>Yii::app()->user->isGuest),
                                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                        //array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                                    ),
                                    )); 
                                    ?>
                                </div>
                                <div class="widget">
                                    <div class="widget-body padding-none margin-none">
                                        <div class="innerAll">
                                            <i class="fa fa-quote-left text-muted pull-left fa-fw"></i> 
                                            <p class="lead margin-none">Đăng Bài</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="gridalicious-row" data-toggle="gridalicious" data-gridalicious-width="340"
                            data-gridalicious-gutter="12" data-gridalicious-selector=".gridalicious-item">
                                <div class="innerAll inner-2x loading text-center text-medium"><i class="fa fa-fw fa-spinner fa-spin"></i> Loading</div>
                                <div class="loaded hide2">
                                   <?php echo $content ?>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-4 col-lg-3">
                            <div class="widget">
                                <div class="widget-body text-center">
                                    <?php
                                            $email = Yii::app()->session['email'];
                                            $profile= Taikhoan::model()->findAllByAttributes(array('email'=>$email));
                                            foreach ($image as $pf ) {
                                                $pf->hinh_dai_dien;
                                            }
                                            if(isset($_GET['iduser'])){
                                                yii::app()->session['matk2'] = $_GET['iduser'];
                                            }
                                            if(isset(yii::app()->session['matk2'])){
                                                $profile = Taikhoan::model()->findAllByAttributes(array('ma_tai_khoan'=>yii::app()->session['matk2']));
                                                foreach ($profile as $pf ) {
                                                    $pf->hinh_dai_dien;
                                                }
                                            }
                                    ?>
                                    <a href="index.php?r=taikhoan/about">
                                        <img src="<?php echo Yii::app()->baseUrl; ?>/upload/avarta/<?php echo $pf->hinh_dai_dien?>"
                                        width="120" alt="" class="img-circle">
                                    </a>
                                    <h2 class="strong margin-none"><?php echo $pf->ho_ten ?></h2>
                                    <div class="innerB">Đang học tại đại học kinh tế đà nẵng</div>
                                    <!-- <div class="btn-group-vertical btn-block">
                                        <a href="" class="btn btn-primary text-center "><i class="fa fa-cog pull-right"></i>Logout</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="widget">
                                <h5 class="innerAll margin-none border-bottom bg-gray">Recent News</h5>
                                <div class="widget-body padding-none">
                                    <div class="media border-bottom innerAll margin-none">
                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/35/22.jpg" class="pull-left media-object" />
                                        <div class="media-body">
                                            <a href="" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="" class="text-inverse">Social Admin Released</a>
                                            </h5>
                                            <small>on February 2nd, 2014</small>
                                        </div>
                                    </div>
                                    <div class="media border-bottom innerAll margin-none">
                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/35/22.jpg" class="pull-left media-object" />
                                        <div class="media-body">
                                            <a href="" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="" class="text-inverse">Timeline Cover Page</a>
                                            </h5>
                                            <small>on February 2nd, 2014</small>
                                        </div>
                                    </div>
                                    <div class="media border-bottom innerAll margin-none">
                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/35/22.jpg" class="pull-left media-object" />
                                        <div class="media-body">
                                            <a href="" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="" class="text-inverse">1000+ Sales</a>
                                            </h5>
                                            <small>on February 2nd, 2014</small>
                                        </div>
                                    </div>
                                    <div class="media border-bottom innerAll margin-none">
                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/35/22.jpg" class="pull-left media-object" />
                                        <div class="media-body">
                                            <a href="" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="" class="text-inverse">On-Page Optimization</a>
                                            </h5>
                                            <small>on February 2nd, 2014</small>
                                        </div>
                                    </div>
                                    <div class="media border-bottom innerAll margin-none">
                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/35/22.jpg" class="pull-left media-object" />
                                        <div class="media-body">
                                            <a href="" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="" class="text-inverse">14th Admin Template</a>
                                            </h5>
                                            <small>on February 2nd, 2014</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Widget -->
                            <div class="widget widget-heading-simple widget-body-white">
                                <!-- Widget Heading -->
                                <div class="widget-head">
                                    <h4 class="heading glyphicons glyphicons-social twitter"><i></i>Twitter feed</h4>
                                </div>
                                <!-- // Widget Heading END -->
                                <div class="widget-body" data-builder-exclude="element children">
                                    <div class="jstwitter" data-gridalicious="false" data-type="slide" data-images="false">
                                        <span class="label label-default">Loading ..</span>
                                    </div>
                                </div>
                            </div>
                            <!-- // Widget END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Content END -->
        <div class="clearfix"></div>
        <!-- // Sidebar menu & content wrapper END -->
        <!-- Footer -->
        <div id="footer" class="hidden-print">
            <!--  Copyright Line -->
            <div class="copy">&copy; 2012 - 2014 - <a href="http://www.mosaicpro.biz">MosaicPro</a> -
                All Rights Reserved. <a href="http://themeforest.net/?ref=mosaicpro"
                target="_blank">Purchase Social Admin Template</a> - Current version:
                v1.0.1-rc2 / <a target="_blank" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/../../CHANGELOG.txt?v=v1.0.1-rc2">changelog</a>
            </div>
            <!--  End Copyright Line -->
        </div>
        <!-- // Footer END -->
    </div>
    <?php 
        }else{
            // nếu session ko tồn tại thì đưa đến trang login.
            $this->redirect(array('//site/login'));
     ?>
     
     <?php }?>
    <!-- // Main Container Fluid END -->
    <!-- Global -->
    <script data-id="App.Config">
    var App = {};
    var basePath = '',
        commonPath = '<?php echo Yii::app()->theme->baseUrl; ?>/css/',
        rootPath = '../',
        DEV = false,
        componentsPath = '<?php echo Yii::app()->theme->baseUrl; ?>/css/components/';
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
   <!-- <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/plugins/preload/pace/pace.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>-->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/plugins/menus/sidr/jquery.sidr.js?v=v1.0.1-rc2"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/modules/admin/twitter/assets/js/twitter.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/plugins/holder/holder.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/gallery/gridalicious/assets/lib/jquery.gridalicious.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/gallery/gridalicious/assets/custom/gridalicious.init.js?v=v1.0.1-rc2"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/modules/admin/maps/google/assets/custom/maps-google.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="http://maps.googleapis.com/maps/api/js?v=3&sensor=false&callback=initGoogleMaps"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/modules/admin/modals/assets/js/bootbox.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/core/js/core.init.js?v=v1.0.1-rc2"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/forms/elements/bootstrap-datepicker/assets/lib/js/bootstrap-datepicker.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/forms/elements/bootstrap-datepicker/assets/custom/js/bootstrap-datepicker.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/forms/elements/jasny-fileupload/assets/js/bootstrap-fileupload.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/forms/elements/fuelux-radio/fuelux-radio.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/forms/elements/bootstrap-switch/assets/lib/js/bootstrap-switch.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/forms/elements/bootstrap-switch/assets/custom/js/bootstrap-switch.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/forms/elements/fuelux-checkbox/fuelux-checkbox.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/forms/elements/uniform/assets/custom/js/uniform.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/gallery/blueimp-gallery/assets/lib/js/blueimp-gallery.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/gallery/blueimp-gallery/assets/lib/js/jquery.blueimp-gallery.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/forms/elements/select2/assets/lib/js/select2.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/forms/elements/select2/assets/custom/js/select2.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/tables/datatables/assets/lib/js/jquery.dataTables.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/tables/datatables/assets/lib/extras/TableTools/media/js/TableTools.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/tables/datatables/assets/lib/extras/ColVis/media/js/ColVis.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/tables/datatables/assets/custom/js/DT_bootstrap.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/tables/datatables/assets/custom/js/datatables.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/forms/elements/bootstrap-select/assets/lib/js/bootstrap-select.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>

</body>
</html>