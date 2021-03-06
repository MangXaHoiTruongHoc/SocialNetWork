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
   
    <?php
    Yii::app()->clientscript
    ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/module.admin.stylesheet-complete.min.css', CClientScript::POS_END )
    // ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/library/jquery/jquery.min.js?v=v1.0.1-rc2&sv=v0.0.1.1', CClientScript::POS_END )
    // ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/library/jquery/jquery-migrate.min.js?v=v1.0.1-rc2&sv=v0.0.1.1', CClientScript::POS_END )
    // ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/library/modernizr/modernizr.js?v=v1.0.1-rc2&sv=v0.0.1.1', CClientScript::POS_END )
    // ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/plugins/less-js/less.min.js?v=v1.0.1-rc2&sv=v0.0.1.1', CClientScript::POS_END )
    // ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.0.1-rc2&sv=v0.0.1.1', CClientScript::POS_END )
    // ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.0.1-rc2&sv=v0.0.1.1', CClientScript::POS_END )
    ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script>
    if ( /*@cc_on!@*/ false && document.documentMode === 10)
    {
        document.documentElement.className += ' ie ie10';
    }
    </script>
</head>
<body class=" menu-right-hidden">
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
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/logo/logo.jpg" alt="">
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
                <div class="innerAll">
                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <div class="timeline-cover">
                                <div class="cover">
                                    <div class="top">
                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css//images/photodune-2755655-party-time-s.jpg" class="img-responsive"
                                        />
                                    </div>
                                    <ul class="list-unstyled">
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
                                    </ul>
                                </div>
                                <div class="widget">
                                    <div class="widget-body padding-none margin-none">
                                        <div class="innerAll">
                                            <i class="fa fa-quote-left text-muted pull-left fa-fw"></i> 
                                            <p class="lead margin-none">What a fun Partyyy</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gridalicious-row" data-toggle="gridalicious" data-gridalicious-width="340"
                            data-gridalicious-gutter="12" data-gridalicious-selector=".gridalicious-item">
                                <div class="innerAll inner-2x loading text-center text-medium"><i class="fa fa-fw fa-spinner fa-spin"></i> Loading</div>
                                <div class="loaded hide2">
                                    <!-- Widget -->
                                    <div class="widget gridalicious-item not-responsive">
                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/photodune-2755655-party-time-s.jpg" alt="" class="img-responsive"
                                        />
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon primary"><i class="fa fa-fw fa-star-o "></i>
                                                <strong>4.8</strong>
                                            </div>
                                        </div>
                                        <div class="innerTB half text-center">
                                            <div class="rating text-medium text-faded margin-top-none">
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star active"></span>
                                                <span class="star"></span>
                                            </div>
                                        </div>
                                        <div class="border-top innerAll">
                                            <div class="pull-left">
                                                <span class="text-muted small innerT innerR pull-left">Rated by:</span>
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/35/13.jpg" class="img-circle pull-left innerR half">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/35/10.jpg" class="img-circle pull-left innerR half">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/35/18.jpg" class="img-circle pull-left innerR half">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/35/1.jpg" class="img-circle pull-left innerR half">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/35/23.jpg" class="img-circle pull-left innerR half">
                                            </div>
                                            <div class="pull-right">
                                                <span class="text-primary strong lead pull-left innerT innerR half "><i class="icon-time-clock" data-toggle="tooltip"
                                                    fata-placement="top" data-title="15 miutes ago"></i>
                                                </span>
                                                <a href="#">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/35/13.jpg"
                                                    class="img-circle pull-right"
                                                    data-toggle="tooltip" fata-placement="top"
                                                    data-title="Marie">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- //End Widget -->
                                    <!-- Widget -->
                                    <div class="widget gridalicious-item not-responsive ">
                                        <!-- Info -->
                                        <div class="bg-gray  border-bottom innerAll">
                                            <a href="#" class="pull-right innerT text-primary">
                                                <i class="icon-reply-all-fill fa fa-2x "></i>
                                            </a>
                                            <a href="" class="lead strong display-block margin-none">Upcoming Party in "Location" </a>
                                            <span><i class="icon-time-clock"></i> added
                                                on 15th January, 2014</span>
                                        </div>
                                        <!-- Content -->
                                        <div class="innerAll">
                                            <p class="lead ">Important text goes in this line!</p>
                                            <div class="innerB">
                                                <a href="">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/social/100/1.jpg"
                                                    alt="" class="img-post display-block-inline"
                                                    />
                                                </a>
                                                <a href="">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/social/100/2.jpg"
                                                    alt="" class="img-post display-block-inline"
                                                    />
                                                </a>
                                                <a href="">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/social/100/3.jpg"
                                                    alt="" class="img-post display-block-inline"
                                                    />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="innerAll border-top">
                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Quaerat, impedit
                                                minus non commodi facere doloribus
                                                nemo ea voluptate nesciunt deleniti.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Expedita, iste
                                                omnis fugiat porro consequuntur
                                                ratione iure error reprehenderit
                                                cum est ab similique magnam molestias
                                                aperiam voluptatibus quia aliquid!
                                                Sed, minima, totam, omnis delectus
                                                autem placeat quod velit sapiente
                                                odit error numquam neque atque
                                                quae facere laborum. Non, suscipit
                                                obcaecati nobis.</p>
                                            <blockquote class="margin-none">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. A, delectus!</blockquote>
                                        </div>
                                        <!-- Comment -->
                                        <div class="bg-gray innerAll border-top border-bottom text-small ">
                                            <span>View all <a href="" class="text-primary">2 Comments</a>
                                            </span>
                                        </div>
                                        <!-- First Comment -->
                                        <div class="media border-bottom margin-none bg-gray">
                                            <a href="" class="pull-left innerAll half">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css//images/people/50/2.jpg" width="50" class="media-object">
                                            </a>
                                            <div class="media-body innerTB">
                                                <a href="#" class="pull-right innerT innerR text-muted">
                                                    <i class="icon-reply-all-fill fa fa-2x "></i>
                                                </a>
                                                <a href="" class="strong text-inverse">Adrian Demian</a> 
                                                <small
                                                class="text-muted ">wrote on Jan 15th, 2014</small>
                                                    <a
                                                    href="" class="text-small">mark it</a>
                                                        <div>- Happy B-Day!</div>
                                            </div>
                                        </div>
                                        <!-- Second Comment -->
                                        <div class="media margin-none bg-gray">
                                            <a href="" class="pull-left innerAll half">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css//images/people/50/11.jpg" width="50" class="media-object">
                                            </a>
                                            <div class="media-body innerTB">
                                                <a href="#" class="pull-right innerT innerR">
                                                    <i class="icon-reply-all-fill fa fa-2x text-muted "></i>
                                                </a>
                                                <a href="" class="strong text-inverse">Jenny Adams</a> 
                                                <small
                                                class="text-muted ">wrote on Jan 15th, 2014</small>
                                                    <a
                                                    href="" class="text-small">mark it</a>
                                                        <div>- Happy Birthday Hun...</div>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Comment here...">
                                    </div>
                                    <!-- //End Widget -->
                                    <!-- Widget -->
                                    <div class="widget gridalicious-item not-responsive">
                                        <!-- Info -->
                                        <div class="bg-primary">
                                            <div class="media">
                                                <a href="" class="pull-left">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/50/13.jpg"
                                                    width="50" class="media-object">
                                                </a>
                                                <div class="media-body innerTB half">
                                                    <a href="#" class="pull-right innerT innerR text-white">
                                                        <i class="icon-reply-all-fill fa fa-2x "></i>
                                                    </a>
                                                    <a href="" class="text-white strong display-block">Joanne Smith</a>
                                                    <span><a href="" class="text-white strong">Checked in</a> on
                                                        15th January, 2014 <i class="icon-time-clock"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="innerAll">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="map_canvas" id="google-map-json" style="height: 180px"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="strong text-inverse innerB half">Just Checked in at:</div>
                                                    <div class="media margin-none">
                                                        <a href="" class="pull-left ">
                                                            <img src="" data-src="holder.js/50x50" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <a href="#" class="strong">Hotel Transilvania</a>
                                                            <p class="margin-none text-small">
                                                                <i class="fa fa-star" style="color:#EB9618;"></i>
                                                                <i class="fa fa-star" style="color:#EB9618;"></i>
                                                                <i class="fa fa-star" style="color:#EB9618;"></i>
                                                                <i class="fa fa-star" style="color:#EB9618;"></i>
                                                                <i class="fa fa-star" style="color:#ccc;"></i>
                                                            </p>
                                                            <small class="text-muted ">342 Likes</small>
                                                        </div>
                                                        <p class="margin-none innerTB half">Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing
                                                            elit. Atque, doloribus
                                                            eum placeat deserunt
                                                            voluptatibus aperiam.</p>
                                                        <a href="#" class="btn btn-xs btn-inverse">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- //Content -->
                                        <a href="#comments-collapse" class="innerAll border-top display-block " data-toggle="collapse"><i class="innerLR fa fa-bars"></i> View
                                            all comments
                                            <span class="text-muted">2+ comments</span>
                                        </a>
                                        <div class="collapse" id="comments-collapse">
                                            <!-- First Comment -->
                                            <div class="media border-bottom margin-none bg-gray">
                                                <a href="" class="pull-left innerAll">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/50/2.jpg"
                                                    width="50" class="media-object">
                                                </a>
                                                <div class="media-body innerTB">
                                                    <a href="#" class="pull-right innerT innerR text-muted">
                                                        <i class="icon-reply-all-fill fa fa-2x "></i>
                                                    </a>
                                                    <a href="" class="strong text-inverse">Adrian Demian</a> 
                                                    <small
                                                    class="text-muted ">wrote on Jan 15th, 2014</small>
                                                        <a
                                                        href="" class="text-small">mark it</a>
                                                            <div>Nice place...</div>
                                                </div>
                                            </div>
                                            <!-- Second Comment -->
                                            <div class="media margin-none ">
                                                <a href="" class="pull-left innerAll">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/50/11.jpg"
                                                    width="50" class="media-object">
                                                </a>
                                                <div class="media-body innerTB">
                                                    <a href="#" class="pull-right innerT innerR"><i class="icon-reply-all-fill fa fa-2x text-muted "></i></a>
                                                    <a href="" class="strong text-inverse">Jenny Adams</a> 
                                                    <small
                                                    class="text-muted ">wrote on Jan 15th, 2014</small>
                                                        <a
                                                        href="" class="text-small">mark it</a>
                                                            <div>There is awesome...I
                                                                was there last
                                                                year</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Comment -->
                                        <div class="media border-top margin-none bg-gray">
                                            <a href="" class="pull-left innerAll">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/50/2.jpg"
                                                width="50" class="media-object">
                                            </a>
                                            <div class="media-body innerTB">
                                                <a href="#" class="pull-right innerT innerR text-muted">
                                                    <i class="icon-reply-all-fill fa fa-2x "></i>
                                                </a>
                                                <a href="" class="strong text-inverse">Adrian Demian</a> 
                                                <small
                                                class="text-muted ">wrote on Jan 15th, 2014</small>
                                                    <a
                                                    href="" class="text-small">mark it</a>
                                                        <div>Have a nice holiday there!</div>
                                            </div>
                                        </div>
                                        <div class="input-group comment">
                                            <input type="text" class="form-control" placeholder="Your comment here...">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-primary" href="#"><i class="fa fa-comment"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //End Widget -->
                                    <!-- Widget -->
                                    <div class="widget gridalicious-item not-responsive">
                                        <!-- Info -->
                                        <div class="bg-primary border-bottom innerLR">
                                            <div class="innerTB half">
                                                <a href="#" class="pull-right innerT text-white">
                                                    <i class="icon-reply-all-fill fa fa-2x "></i>
                                                </a>
                                                <a href="" class="text-white strong display-block">Weather</a>
                                                <span>
                                                    <small>Romania</small> <a href="" class="text-white">Bucharest</a> 
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div id="weather-carousel" class="carousel slide innerAll" data-ride="carousel">
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner ">
                                                <div class="item active bg-white">
                                                    <div class="pull-right innerR">
                                                        <span class="text-large">26 <i class="text-danger icon-thermometer-1"></i>
                                                        </span>
                                                    </div>
                                                    <h4 class="strong innerL margin-none">Monday</h4>
                                                    <p class=" innerL margin-none">
                                                        <span class="text-inverse">23.02.2014</span>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <div class="media margin-none innerTB half">
                                                        <a href="#" class="media-object pull-left ">
                                                            <div class="text-center text-xxlarge innerAll">
                                                                <i class=" icon-sunny fa fa-2x  text-primary"></i>
                                                            </div>
                                                        </a>
                                                        <div class="media-body">
                                                            <ul class="list-unstyled text-small">
                                                                <div class="widget margin-none">
                                                                    <div class="row row-merge">
                                                                        <div class="col-xs-6 ">
                                                                            <div class="text-center">
                                                                                <li class="display-block border-bottom">
                                                                                    <small>
                                                                                        <i
                                                                                        class="fa fa-clock-o text-muted"></i>
                                                                                    </small>08
                                                                                    -
                                                                                    12
                                                                                    <i
                                                                                    class="fa-2x innerL half text-primary icon-light-sleet"></i>
                                                                                </li>
                                                                                <li class="display-block ">
                                                                                    <small>
                                                                                        <i
                                                                                        class="fa fa-clock-o text-muted"></i>
                                                                                    </small>12
                                                                                    -
                                                                                    16
                                                                                    <i
                                                                                    class="fa-2x innerL half text-primary icon-light-fog"></i>
                                                                                </li>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 ">
                                                                            <div class="text-center">
                                                                                <li class="display-block border-bottom">
                                                                                    <small>
                                                                                        <i
                                                                                        class="fa fa-clock-o text-muted"></i>
                                                                                    </small>16
                                                                                    -
                                                                                    20
                                                                                    <i
                                                                                    class="fa-2x innerL half text-primary icon-partly-cloudy"></i>
                                                                                </li>
                                                                                <li class="display-block ">
                                                                                    <small>
                                                                                        <i
                                                                                        class="fa fa-clock-o text-muted"></i>
                                                                                    </small>20
                                                                                    -
                                                                                    24
                                                                                    <i
                                                                                    class="fa-2x innerL half text-primary icon-cloudy-night"></i>
                                                                                </li>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </ul>
                                                            <p class="widget border-top-none innerAll half bg-gray margin-none">
                                                                <span class="pull-left">
                                                                    <small class="text-muted">min:</small>
                                                                    <span
                                                                    class="lead">25</span>
                                                                <i
                                                                class="icon-thermometer-1 fa-2x text-warning"></i>
                                                                    </span>
                                                                    <span class="pull-right">
                                                                        <small class="text-muted">max:</small>
                                                                        <span
                                                                        class="lead">29</span>
                                                                    <i
                                                                    class="icon-thermometer-1 fa-2x text-danger"></i>
                                                                        </span>
                                                                        <span class="clearfix"></span>
                                                            </p>
                                                            <p class="widget border-top-none innerAll half bg-gray margin-none">
                                                                <span class="pull-left">
                                                                    <small class="text-muted">Wind:</small>
                                                                    <span
                                                                    class="strong">5</span>
                                                                <i
                                                                class="icon-wind-sock fa text-info"></i>
                                                                    </span>
                                                                    <span class="pull-right">
                                                                        <small class="text-muted">Humidity:</small>
                                                                        <span
                                                                        class="strong">120</span>
                                                                    <i
                                                                    class="icon-heavy-rain-fill fa text-primary"></i>
                                                                        </span>
                                                                        <span class="clearfix"></span>
                                                            </p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="item bg-white">
                                                    <div class="pull-right innerR">
                                                        <span class="text-large">26 <i class="text-danger icon-thermometer-1"></i>
                                                        </span>
                                                    </div>
                                                    <h4 class="strong innerL margin-none">Tuesday</h4>
                                                    <p class=" innerL margin-none">
                                                        <span class="text-inverse">24.02.2014</span>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <div class="media margin-none innerTB half">
                                                        <a href="#" class="media-object pull-left ">
                                                            <div class="text-center text-xxlarge innerAll">
                                                                <i class=" icon-partly-cloudy fa fa-2x text-primary"></i>
                                                            </div>
                                                        </a>
                                                        <div class="media-body">
                                                            <ul class="list-unstyled text-small">
                                                                <div class="widget margin-none">
                                                                    <div class="row row-merge">
                                                                        <div class="col-xs-6 ">
                                                                            <div class="text-center">
                                                                                <li class="display-block border-bottom">
                                                                                    <small>
                                                                                        <i
                                                                                        class="fa fa-clock-o text-muted"></i>
                                                                                    </small>08
                                                                                    -
                                                                                    12
                                                                                    <i
                                                                                    class="fa-2x innerL half text-primary icon-light-sleet"></i>
                                                                                </li>
                                                                                <li class="display-block ">
                                                                                    <small>
                                                                                        <i
                                                                                        class="fa fa-clock-o text-muted"></i>
                                                                                    </small>12
                                                                                    -
                                                                                    16
                                                                                    <i
                                                                                    class="fa-2x innerL half text-primary icon-light-fog"></i>
                                                                                </li>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 ">
                                                                            <div class="text-center">
                                                                                <li class="display-block border-bottom">
                                                                                    <small>
                                                                                        <i
                                                                                        class="fa fa-clock-o text-muted"></i>
                                                                                    </small>16
                                                                                    -
                                                                                    20
                                                                                    <i
                                                                                    class="fa-2x innerL half text-primary icon-partly-cloudy"></i>
                                                                                </li>
                                                                                <li class="display-block ">
                                                                                    <small>
                                                                                        <i
                                                                                        class="fa fa-clock-o text-muted"></i>
                                                                                    </small>20
                                                                                    -
                                                                                    24
                                                                                    <i
                                                                                    class="fa-2x innerL half text-primary icon-cloudy-night"></i>
                                                                                </li>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </ul>
                                                            <p class="widget border-top-none innerAll half bg-gray margin-none">
                                                                <span class="pull-left">
                                                                    <small class="text-muted">min:</small>
                                                                    <span
                                                                    class="lead">24</span>
                                                                <i
                                                                class="icon-thermometer-1 fa-2x text-warning"></i>
                                                                    </span>
                                                                    <span class="pull-right">
                                                                        <small class="text-muted">max:</small>
                                                                        <span
                                                                        class="lead">28</span>
                                                                    <i
                                                                    class="icon-thermometer-1 fa-2x text-danger"></i>
                                                                        </span>
                                                                        <span class="clearfix"></span>
                                                            </p>
                                                            <p class="widget border-top-none innerAll half bg-gray margin-none">
                                                                <span class="pull-left">
                                                                    <small class="text-muted">Wind:</small>
                                                                    <span
                                                                    class="strong">7</span>
                                                                <i
                                                                class="icon-wind-sock fa text-info"></i>
                                                                    </span>
                                                                    <span class="pull-right">
                                                                        <small class="text-muted">Humidity:</small>
                                                                        <span
                                                                        class="strong">110</span>
                                                                    <i
                                                                    class="icon-heavy-rain-fill fa text-primary"></i>
                                                                        </span>
                                                                        <span class="clearfix"></span>
                                                            </p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="item  bg-white">
                                                    <div class="pull-right innerR">
                                                        <span class="text-large">20 <i class="text-danger icon-thermometer-1"></i>
                                                        </span>
                                                    </div>
                                                    <h4 class="strong innerL margin-none">Wednesday</h4>
                                                    <p class=" innerL margin-none">
                                                        <span class="text-inverse">25.02.2014</span>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <div class="media margin-none innerTB half">
                                                        <a href="#" class="media-object pull-left ">
                                                            <div class="text-center text-xxlarge innerAll">
                                                                <i class="icon-light-rain fa fa-2x text-primary"></i>
                                                            </div>
                                                        </a>
                                                        <div class="media-body">
                                                            <ul class="list-unstyled text-small">
                                                                <div class="widget margin-none">
                                                                    <div class="row row-merge">
                                                                        <div class="col-xs-6 ">
                                                                            <div class="text-center">
                                                                                <li class="display-block border-bottom">
                                                                                    <small>
                                                                                        <i
                                                                                        class="fa fa-clock-o text-muted"></i>
                                                                                    </small>08
                                                                                    -
                                                                                    12
                                                                                    <i
                                                                                    class="fa-2x innerL half text-primary icon-light-sleet"></i>
                                                                                </li>
                                                                                <li class="display-block ">
                                                                                    <small>
                                                                                        <i
                                                                                        class="fa fa-clock-o text-muted"></i>
                                                                                    </small>12
                                                                                    -
                                                                                    16
                                                                                    <i
                                                                                    class="fa-2x innerL half text-primary icon-light-fog"></i>
                                                                                </li>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 ">
                                                                            <div class="text-center">
                                                                                <li class="display-block border-bottom">
                                                                                    <small>
                                                                                        <i
                                                                                        class="fa fa-clock-o text-muted"></i>
                                                                                    </small>16
                                                                                    -
                                                                                    20
                                                                                    <i
                                                                                    class="fa-2x innerL half text-primary icon-partly-cloudy"></i>
                                                                                </li>
                                                                                <li class="display-block ">
                                                                                    <small>
                                                                                        <i
                                                                                        class="fa fa-clock-o text-muted"></i>
                                                                                    </small>20
                                                                                    -
                                                                                    24
                                                                                    <i
                                                                                    class="fa-2x innerL half text-primary icon-cloudy-night"></i>
                                                                                </li>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </ul>
                                                            <p class="widget border-top-none innerAll half bg-gray margin-none">
                                                                <span class="pull-left">
                                                                    <small class="text-muted">min:</small>
                                                                    <span
                                                                    class="lead">16</span>
                                                                <i
                                                                class="icon-thermometer-1 fa-2x text-warning"></i>
                                                                    </span>
                                                                    <span class="pull-right">
                                                                        <small class="text-muted">max:</small>
                                                                        <span
                                                                        class="lead">22</span>
                                                                    <i
                                                                    class="icon-thermometer-1 fa-2x text-danger"></i>
                                                                        </span>
                                                                        <span class="clearfix"></span>
                                                            </p>
                                                            <p class="widget border-top-none innerAll half bg-gray margin-none">
                                                                <span class="pull-left">
                                                                    <small class="text-muted">Wind:</small>
                                                                    <span
                                                                    class="strong">15</span>
                                                                <i
                                                                class="icon-wind-sock fa text-info"></i>
                                                                    </span>
                                                                    <span class="pull-right">
                                                                        <small class="text-muted">Humidity:</small>
                                                                        <span
                                                                        class="strong">150</span>
                                                                    <i
                                                                    class="icon-heavy-rain-fill fa text-primary"></i>
                                                                        </span>
                                                                        <span class="clearfix"></span>
                                                            </p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ol class="carousel-indicators">
                                                <li data-target="#weather-carousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#weather-carousel" data-slide-to="1"></li>
                                                <li data-target="#weather-carousel" data-slide-to="2"></li>
                                            </ol>
                                        </div>
                                    </div>
                                    <!-- //End Widget -->
                                    <!-- Widget -->
                                    <div class="widget gridalicious-item not-responsive">
                                        <!-- Info -->
                                        <div class="bg-primary">
                                            <div class="media innerLR">
                                                <div class="innerT half  pull-left">
                                                    <i class=" icon-partly-cloudy fa-2x"></i>
                                                </div>
                                                <div class="media-body innerTB half">
                                                    <a href="#" class="pull-right innerT text-white">
                                                        <i class="icon-reply-all-fill fa fa-2x "></i>
                                                    </a>
                                                    <div class=" strong">Weather Forecast</div>
                                                    <div>Today</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget margin-none">
                                            <div class="row row-merge">
                                                <div class="col-md-5 text-center">
                                                    <a class="text-large innerT media-object"><i class="fa fa-sun-o fa-3x text-inverse"></i></a>
                                                    <p class="lead strong">Sunny</p>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="text-center">
                                                        <a href="#" class="innerTB display-block border-bottom half">
                                                            <i class="icon-light-fog text-large display-block "></i>
                                                            <div class="text-muted innerT half strong">Morning</div>
                                                        </a>
                                                        <a href="#" class="innerTB display-block half">
                                                            <i class="icon-moon text-large display-block "></i>
                                                            <div class="text-muted innerT half strong">Evening</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //End Widget -->
                                    <!-- Widget -->
                                    <div class="widget gridalicious-item not-responsive">
                                        <!-- Info -->
                                        <div class="bg-primary">
                                            <div class="media">
                                                <a href="" class="pull-left">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/50/13.jpg"
                                                    width="50" class="media-object">
                                                </a>
                                                <div class="media-body innerTB half">
                                                    <a href="#" class="pull-right innerT innerR text-white">
                                                        <i class="icon-reply-all-fill fa fa-2x "></i>
                                                    </a>
                                                    <a href="" class="text-white strong display-block">Joanne Smith</a>
                                                    <span>added <a href="" class="text-white strong">Photos</a> on
                                                        15th January, 2014 <i class="icon-time-clock"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="innerAll">
                                            <p class="lead">Late Night Show Photos</p>
                                            <a href="">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/social/100/1.jpg"
                                                alt="" class="img-post display-block-inline"
                                                />
                                            </a>
                                            <a href="">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/social/100/2.jpg"
                                                alt="" class="img-post display-block-inline"
                                                />
                                            </a>
                                            <a href="">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/social/100/3.jpg"
                                                alt="" class="img-post display-block-inline"
                                                />
                                            </a>
                                        </div>
                                        <!-- Comment -->
                                        <div class="bg-gray innerAll border-top border-bottom text-small ">
                                            <span>View all <a href="" class="text-primary">2 Comments</a>
                                            </span>
                                        </div>
                                        <!-- First Comment -->
                                        <div class="media border-bottom margin-none bg-gray">
                                            <a href="" class="pull-left innerAll">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/50/2.jpg"
                                                width="50" class="media-object">
                                            </a>
                                            <div class="media-body innerTB">
                                                <a href="#" class="pull-right innerT innerR text-muted">
                                                    <i class="icon-reply-all-fill fa fa-2x "></i>
                                                </a>
                                                <a href="" class="strong text-inverse">Adrian Demian</a> 
                                                <small
                                                class="text-muted ">wrote on Jan 15th, 2014</small>
                                                    <a
                                                    href="" class="text-small">mark it</a>
                                                        <div>- Happy B-Day!</div>
                                            </div>
                                        </div>
                                        <!-- Second Comment -->
                                        <div class="media margin-none bg-gray">
                                            <a href="" class="pull-left innerAll">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/50/11.jpg"
                                                width="50" class="media-object">
                                            </a>
                                            <div class="media-body innerTB">
                                                <a href="#" class="pull-right innerT innerR"><i class="icon-reply-all-fill fa fa-2x text-muted "></i></a>
                                                <a href="" class="strong text-inverse">Jenny Adams</a> 
                                                <small
                                                class="text-muted ">wrote on Jan 15th, 2014</small>
                                                    <a
                                                    href="" class="text-small">mark it</a>
                                                        <div>- Happy Birthday Hun...</div>
                                            </div>
                                        </div>
                                        <div class="input-group comment">
                                            <input type="text" class="form-control" placeholder="Your comment here...">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-primary" href="#"><i class="fa fa-comment"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //End Widget -->
                                    <!-- Widget -->
                                    <div class="widget gridalicious-item not-responsive">
                                        <!-- Info -->
                                        <div class="bg-primary">
                                            <div class="media">
                                                <a href="" class="pull-left">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/50/15.jpg"
                                                    width="50" class="media-object">
                                                </a>
                                                <div class="media-body innerTB half">
                                                    <a href="#" class="pull-right innerT innerR text-white">
                                                        <i class="icon-reply-all-fill fa fa-2x "></i>
                                                    </a>
                                                    <a href="" class="text-white strong display-block">Joanne Smith</a>
                                                    <span>on 15th January, 2014</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="innerAll">
                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Quaerat, pariatur!</p>
                                        </div>
                                        <!-- Comment -->
                                        <div class="bg-gray innerAll border-top border-bottom text-small ">
                                            <span>View all <a href="" class="text-primary">1 Comment</a>
                                            </span>
                                        </div>
                                        <!-- First Comment -->
                                        <div class="media margin-none bg-gray">
                                            <a href="" class="pull-left innerAll">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/50/18.jpg"
                                                width="50" class="media-object">
                                            </a>
                                            <div class="media-body innerTB">
                                                <a href="#" class="pull-right innerT innerR text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                                <a href="" class="strong text-inverse">Adrian Demian</a> 
                                                <small
                                                class="text-muted display-block ">on Jan 15th, 2014</small>	<a href=""
                                                    class="text-small">mark it</a>
                                                    <div>- Happy B-Day!</div>
                                            </div>
                                        </div>
                                        <div class="input-group comment">
                                            <input type="text" class="form-control" placeholder="Your comment here...">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-primary" href="#"><i class="fa fa-comment"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //End Widget -->
                                    <!-- Widget -->
                                    <div class="widget gridalicious-item not-responsive">
                                        <div class="media">
                                            <a href="" class="pull-left">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/50/3.jpg"
                                                width="50" class="media-object">
                                            </a>
                                            <div class="media-body innerTB half">
                                                <a href="#" class="pull-right innerT innerR text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                                <a href="" class="strong display-block">Just Mary</a>
                                                <span>on 15th January, 2014</span>
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <a href="">
                                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/photodune-2755655-party-time-s.jpg"
                                            alt="" class="img-responsive">
                                        </a>
                                        <!-- Comment -->
                                        <div class="bg-primary innerAll text-small ">
                                            <span>View all <a href="" class="strong text-white">1 Comment</a>
                                            </span>
                                        </div>
                                        <!-- First Comment -->
                                        <div class="media margin-none">
                                            <a href="" class="pull-left innerAll">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/50/5.jpg"
                                                width="50" class="media-object">
                                            </a>
                                            <div class="media-body innerTB">
                                                <a href="#" class="pull-right innerT innerR text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                                <a href="" class="strong text-inverse">Adrian Demian</a>
                                                <small class="text-muted display-block ">on Jan 15th, 2014</small>
                                                <div>- Happy B-Day!</div>
                                                <a href="" class="text-small">mark it</a>
                                            </div>
                                        </div>
                                        <div class="input-group comment">
                                            <input type="text" class="form-control" placeholder="Your comment here...">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-primary" href="#"><i class="fa fa-comment"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //End Widget -->
                                    <!-- Widget -->
                                    <div class="widget gridalicious-item not-responsive">
                                        <a href="">
                                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/photodune-6374531-at-celebration-xs.jpg"
                                            alt="" class="img-responsive">
                                        </a>
                                        <!-- Info -->
                                        <div class="bg-primary">
                                            <div class="innerAll">
                                                <a href="#" class="pull-right innerT innerR text-white"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                                <div class="innerAll">
                                                    <a href="" class="text-white text-medium">Fun Party in Rome </a>
                                                    <span class="display-block">on 15th January, 2014</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Comment -->
                                        <div class="bg-gray border-bottom innerAll text-small ">
                                            <span>View all <a href="" class="strong text-primary">1 Comment</a>
                                            </span>
                                        </div>
                                        <!-- First Comment -->
                                        <div class="media margin-none bg-gray">
                                            <a href="" class="pull-left innerAll">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/50/12.jpg" width="50" class="media-object">
                                            </a>
                                            <div class="media-body innerTB">
                                                <a href="#" class="pull-right innerT innerR text-muted">
                                                    <i class="icon-reply-all-fill fa fa-2x "></i>
                                                </a>
                                                <a href="" class="strong text-inverse">Adrian Demian</a> 
                                                <small
                                                class="text-muted display-block ">on Jan 15th, 2014</small>
                                                    <div>- Happy B-Day!</div>
                                                    <a href="" class="text-small">mark it</a>
                                            </div>
                                        </div>
                                        <div class="input-group comment">
                                            <input type="text" class="form-control" placeholder="Your comment here...">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-primary" href="#"><i class="fa fa-comment"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //End Widget -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="widget">
                                <div class="widget-body text-center">
                                    <a href="">
                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/people/250/22.jpg"
                                        width="120" alt="" class="img-circle">
                                    </a>
                                    <h2 class="strong margin-none">Adrian Demian</h2>
                                    <div class="innerB">Working at MOSAICPRO</div>
                                    <a href="" class="btn btn-primary text-center btn-block">PRO Account</a>
                                    <div class="btn-group-vertical btn-block">
                                        <a href="" class="btn btn-default"><i class="fa fa-cog pull-right"></i>Edit Account</a>
                                        <a href="" class="btn btn-default"><i class="fa fa-cog pull-right"></i>Logout</a>
                                    </div>
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
     <?php
    Yii::app()->clientscript
    ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/library/bootstrap/js/bootstrap.min.js?v=v1.0.1-rc2&sv=v0.0.1.1', CClientScript::POS_END )
    ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/ccomponents/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.0.1-rc2&sv=v0.0.1.1', CClientScript::POS_END )
    ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/library/jquery/jquery-migrate.min.js?v=v1.0.1-rc2&sv=v0.0.1.1', CClientScript::POS_END )
    ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/plugins/preload/pace/pace.min.js?v=v1.0.1-rc2&sv=v0.0.1.1', CClientScript::POS_END )
    ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/plugins/menus/sidr/jquery.sidr.js?v=v1.0.1-rc2', CClientScript::POS_END )
    ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.0.1-rc2&sv=v0.0.1.1', CClientScript::POS_END )
    ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/modules/admin/twitter/assets/js/twitter.init.js?v=v1.0.1-rc2&sv=v0.0.1.1', CClientScript::POS_END )
    ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/plugins/holder/holder.js?v=v1.0.1-rc2&sv=v0.0.1.1', CClientScript::POS_END )
    ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/common/gallery/gridalicious/assets/lib/jquery.gridalicious.min.js?v=v1.0.1-rc2&sv=v0.0.1.1', CClientScript::POS_END )
    ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/common/gallery/gridalicious/assets/custom/gridalicious.init.js?v=v1.0.1-rc2', CClientScript::POS_END )
    ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/modules/admin/maps/google/assets/custom/maps-google.init.js?v=v1.0.1-rc2&sv=v0.0.1.1', CClientScript::POS_END )
    ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/modules/admin/modals/assets/js/bootbox.min.js?v=v1.0.1-rc2&sv=v0.0.1.1', CClientScript::POS_END )
    ->registerScriptFile( Yii::app()->theme->baseUrl . '/css/components/core/js/core.init.js?v=v1.0.1-rc2', CClientScript::POS_END )
    ?>
   
    <script src="http://maps.googleapis.com/maps/api/js?v=3&sensor=false&callback=initGoogleMaps"></script>
  
</body>
</html>