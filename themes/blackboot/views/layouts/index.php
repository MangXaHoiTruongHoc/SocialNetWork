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
    />
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
<body class=" menu-right-hidden">
    <!-- nonelogin -->
    <?php  
        if(isset(Yii::app()->session['ma_tai_khoan'])){
    ?>
    <!-- login -->
    <!-- Main Container Fluid -->
    <div class="container-fluid ">
        <!-- Content START -->
        <div id="content">
           
            <nav class="navbar navbar-default top-nav navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle btn btn-default" data-toggle="collapse"
                        data-target="#navbar-fixed-layout-collapse">
                            <i class="fa fa-indent"></i>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css//images/logo/logo.jpg" alt="">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-fixed-layout-collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Layout <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="active">
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&layout_fixed=false">Fluid Layout
					</a>
                                    </li>
                                    <li>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&layout_fixed=true">Fixed Layout
					</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Timeline</li>
                                    <li class="active">
                                        <a href="index.html?lang=en">
                                            <span>Timeline #1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="timeline_2.html?lang=en">
                                            <span>Timeline #2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="timeline_3.html?lang=en">
                                            <span>Timeline #3</span>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Media</li>
                                    <li>
                                        <a href="media_1.html?lang=en">
                                            <span>Photos #1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="media_2.html?lang=en">
                                            <span>Photos #2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="media_3.html?lang=en">
                                            <span>Photos #3</span>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Contacts</li>
                                    <li>
                                        <a href="contacts_1.html?lang=en">
                                            <span>Friends #1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contacts_2.html?lang=en">
                                            <span>Friends #2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contacts_3.html?lang=en">
                                            <span>Friends #3</span>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">About</li>
                                    <li>
                                        <a href="about_1.html?lang=en">
                                            <span>About #1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about_2.html?lang=en">
                                            <span>About #2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about_3.html?lang=en">
                                            <span>About #3</span>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="messages.html?lang=en">
                                            <span>Messages</span>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Music</li>
                                    <li>
                                        <a href="playlist.html?lang=en">
                                            <span>playlist</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="albums.html?lang=en">
                                            <span>Albums</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="song.html?lang=en">
                                            <span>Song</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nav Color <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&navbar_type=navbar-default">
            	White Navbar</a>
                                    </li>
                                    <li>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&navbar_type=navbar-inverse">
            	Dark Navbar</a>
                                    </li>
                                    <li>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&navbar_type=navbar-primary">
            		Primary Color Navbar</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="innerAll half" style="line-height:20px;">
                                        <div class="strong">Skin Colors</div>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=style-default"
                                        style="background-color: #25ad9f; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">style-default</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=green-army"
                                        style="background-color: #9FB478; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">green-army</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=alizarin-crimson"
                                        style="background-color: #F06F6F; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">alizarin-crimson</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=blue-gray"
                                        style="background-color: #5577b4; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">blue-gray</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=brown"
                                        style="background-color: #d39174; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">brown</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=purple-gray"
                                        style="background-color: #AF86B9; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">purple-gray</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=purple-wine"
                                        style="background-color: #CC6788; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">purple-wine</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=black-and-white"
                                        style="background-color: #979797; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">black-and-white</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=amazon"
                                        style="background-color: #8BC4B9; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">amazon</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=amber"
                                        style="background-color: #b0b069; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">amber</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=android-green"
                                        style="background-color: #A9C784; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">android-green</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=antique-brass"
                                        style="background-color: #B3998A; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">antique-brass</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=antique-bronze"
                                        style="background-color: #8D8D6E; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">antique-bronze</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=artichoke"
                                        style="background-color: #B0B69D; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">artichoke</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=atomic-tangerine"
                                        style="background-color: #F19B69; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">atomic-tangerine</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=bazaar"
                                        style="background-color: #98777B; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">bazaar</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=bistre-brown"
                                        style="background-color: #C3A961; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">bistre-brown</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=green"
                                        style="background-color: #77ac40; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">green</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=bittersweet"
                                        style="background-color: #d6725e; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">bittersweet</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=blueberry"
                                        style="background-color: #7789D1; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">blueberry</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=bud-green"
                                        style="background-color: #6fa362; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">bud-green</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=coral"
                                        style="background-color: #7eccc2; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">coral</span>
                                        </a>
                                        <a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.1-rc2&skin=burnt-sienna"
                                        style="background-color: #E4968A; display:inline-block; width:30px; height:30px; margin:1px;"
                                        class="no-ajaxify innerAll half ">
                                            <span class="hide">burnt-sienna</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-left hidden-sm" role="search">
                            <div class="form-group inline-block">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-inverse"><i class="fa fa-search fa-fw"></i>
                            </button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="innerLR">
                                <button type="button" class="btn btn-success navbar-btn"><i class="fa fa-pencil"></i> Sign in</button>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="pull-left innerR">
                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/35/16.jpg"
                                        alt="user" class="img-circle">
                                    </span>
                                    Bill <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
            <!-- <div class="layout-app">  -->
            <div class="container">
                <?php echo $content ?>
                
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
     ?>
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
                                                        <div class="innerLR">
                                                            <input class="form-control text-center bg-gray" type="text" placeholder="Username"
                                                            />
                                                            <input class="form-control text-center bg-gray" type="password" placeholder="Enter Password"
                                                            />
                                                        </div>
                                                        <div class="innerT">
                                                            <a href="index.html?lang=en" class="btn btn-primary">Login <i class="fa fa-fw fa-unlock-alt"></i></a>
                                                        </div>
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
                </div>
                </div>
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
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/plugins/preload/pace/pace.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/plugins/menus/sidr/jquery.sidr.js?v=v1.0.1-rc2"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/modules/admin/twitter/assets/js/twitter.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/plugins/holder/holder.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/gallery/gridalicious/assets/lib/jquery.gridalicious.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/common/gallery/gridalicious/assets/custom/gridalicious.init.js?v=v1.0.1-rc2"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/modules/admin/maps/google/assets/custom/maps-google.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="http://maps.googleapis.com/maps/api/js?v=3&sensor=false&callback=initGoogleMaps"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/modules/admin/modals/assets/js/bootbox.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/core/js/core.init.js?v=v1.0.1-rc2"></script>
</body>
</html>