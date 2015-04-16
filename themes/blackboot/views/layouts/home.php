<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 sidebar sidebar-social footer-sticky"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 sidebar sidebar-social footer-sticky"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 sidebar sidebar-social footer-sticky"> <![endif]-->
<!--[if gt IE 8]> <html class="ie sidebar sidebar-social footer-sticky"> <![endif]-->
<!--[if !IE]><!-->
<html class="sidebar sidebar-social footer-sticky">
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
	<link rel="stylesheet/less" href="<?php echo yii::app()->theme->baseurl; ?>/css/less/admin/module.admin.stylesheet-complete.less" />
	-->
    <!--[if lt IE 9]><link rel="stylesheet" href="<?php echo yii::app()->theme->baseurl; ?>/css/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->
    <link rel="stylesheet" href="<?php echo yii::app()->theme->baseurl; ?>/css/module.admin.stylesheet-complete.min.css"
    />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/library/jquery/jquery.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/library/jquery/jquery-migrate.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/library/modernizr/modernizr.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/plugins/less-js/less.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script>
    if ( /*@cc_on!@*/ false && document.documentMode === 10)
    {
        document.documentElement.className += ' ie ie10';
    }
    </script>
</head>
<body class="">
    <!-- Main Container Fluid -->
    <div class="container-fluid menu-hidden ">
        <!-- Main Sidebar Menu -->
        <div id="menu" class="hidden-print hidden-xs sidebar-default sidebar-brand-primary">
            <div id="sidebar-social-wrapper">
                <div id="brandWrapper">
                    <a href="../index.html?lang=en">
                        <span class="text">Social Admin Template</span>
                    </a>
                </div>
                <ul class="menu list-unstyled" id="navigation_current_page">
                    <li class="category">Navigation</li>
                    <li class="hasSubmenu">
                        <a href="#sidebar-fusion-layout" data-toggle="collapse"><i class="icon-tv"></i><span>Layout</span></a>
                        <ul id="sidebar-fusion-layout" class="collapse">
                            <li class="active">
                                <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&layout_fixed=false"><i class="fa fa-circle-o"></i>
                                    <span>Fluid Layout</span>
                                </a>
                            </li>
                            <li>
                                <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&layout_fixed=true"><i class="fa fa-square-o"></i>
                                    <span>Fixed Layout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="hasSubmenu">
                        <a href="#sidebar-fusion-timelines" data-toggle="collapse"><i class="icon-ship-wheel"></i><span>Timelines</span></a>
                        <ul id="sidebar-fusion-timelines" class="collapse">
                            <li><a href="../index.html?lang=en"><i class="fa fa-clock-o"></i><span>Timeline #1</span></a>
                            </li>
                            <li><a href="../timeline_2.html?lang=en"><i class="fa fa-clock-o"></i><span>Timeline #2</span></a>
                            </li>
                            <li><a href="../timeline_3.html?lang=en"><i class="fa fa-clock-o"></i><span>Timeline #3</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="hasSubmenu">
                        <a href="#sidebar-fusion-media" data-toggle="collapse"><i class="icon-flip-camera-fill"></i><span>Photos</span></a>
                        <ul id="sidebar-fusion-media" class="collapse">
                            <li><a href="../media_1.html?lang=en"><i class="fa fa-camera"></i><span>Photos #1</span></a>
                            </li>
                            <li><a href="../media_2.html?lang=en"><i class="fa fa-camera"></i><span>Photos #2</span></a>
                            </li>
                            <li><a href="../media_3.html?lang=en"><i class="fa fa-camera"></i><span>Photos #3</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="hasSubmenu">
                        <a href="#sidebar-fusion-contacts" data-toggle="collapse"><i class="icon-group"></i><span>Friends</span></a>
                        <ul id="sidebar-fusion-contacts" class="collapse">
                            <li><a href="../contacts_1.html?lang=en"><i class="fa fa-group"></i><span>Friends #1</span></a>
                            </li>
                            <li><a href="../contacts_2.html?lang=en"><i class="fa fa-group"></i><span>Friends #2</span></a>
                            </li>
                            <li><a href="../contacts_3.html?lang=en"><i class="fa fa-group"></i><span>Friends #3</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="hasSubmenu">
                        <a href="#sidebar-fusion-about" data-toggle="collapse"><i class="icon-user-1"></i><span>About</span></a>
                        <ul id="sidebar-fusion-about" class="collapse">
                            <li><a href="../about_1.html?lang=en"><i class="fa fa-user"></i><span>About #1</span></a>
                            </li>
                            <li><a href="../about_2.html?lang=en"><i class="fa fa-user"></i><span>About #2</span></a>
                            </li>
                            <li><a href="../about_3.html?lang=en"><i class="fa fa-user"></i><span>About #3</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="../messages.html?lang=en"><i class="icon-comment-typing"></i><span>Messages</span></a>
                    </li>
                    <li class="category border-top">Skins</li>
                    <li class="reset">
                        <div class="innerLR innerB border-bottom">
                            <ul class="colors hidden-xs">
                                <li class="active">
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=style-default"
                                    style="background-color: #25ad9f" class="no-ajaxify innerAll half">
                                        <span class="hide">style-default</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=green-army"
                                    style="background-color: #9FB478" class="no-ajaxify innerAll half">
                                        <span class="hide">green-army</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=alizarin-crimson"
                                    style="background-color: #F06F6F" class="no-ajaxify innerAll half">
                                        <span class="hide">alizarin-crimson</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=blue-gray"
                                    style="background-color: #5577b4" class="no-ajaxify innerAll half">
                                        <span class="hide">blue-gray</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=brown"
                                    style="background-color: #d39174" class="no-ajaxify innerAll half">
                                        <span class="hide">brown</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=purple-gray"
                                    style="background-color: #AF86B9" class="no-ajaxify innerAll half">
                                        <span class="hide">purple-gray</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=purple-wine"
                                    style="background-color: #CC6788" class="no-ajaxify innerAll half">
                                        <span class="hide">purple-wine</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=black-and-white"
                                    style="background-color: #979797" class="no-ajaxify innerAll half">
                                        <span class="hide">black-and-white</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=amazon"
                                    style="background-color: #8BC4B9" class="no-ajaxify innerAll half">
                                        <span class="hide">amazon</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=amber"
                                    style="background-color: #b0b069" class="no-ajaxify innerAll half">
                                        <span class="hide">amber</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=android-green"
                                    style="background-color: #A9C784" class="no-ajaxify innerAll half">
                                        <span class="hide">android-green</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=antique-brass"
                                    style="background-color: #B3998A" class="no-ajaxify innerAll half">
                                        <span class="hide">antique-brass</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=antique-bronze"
                                    style="background-color: #8D8D6E" class="no-ajaxify innerAll half">
                                        <span class="hide">antique-bronze</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=artichoke"
                                    style="background-color: #B0B69D" class="no-ajaxify innerAll half">
                                        <span class="hide">artichoke</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=atomic-tangerine"
                                    style="background-color: #F19B69" class="no-ajaxify innerAll half">
                                        <span class="hide">atomic-tangerine</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=bazaar"
                                    style="background-color: #98777B" class="no-ajaxify innerAll half">
                                        <span class="hide">bazaar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=bistre-brown"
                                    style="background-color: #C3A961" class="no-ajaxify innerAll half">
                                        <span class="hide">bistre-brown</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=green"
                                    style="background-color: #77ac40" class="no-ajaxify innerAll half">
                                        <span class="hide">green</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=bittersweet"
                                    style="background-color: #d6725e" class="no-ajaxify innerAll half">
                                        <span class="hide">bittersweet</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=blueberry"
                                    style="background-color: #7789D1" class="no-ajaxify innerAll half">
                                        <span class="hide">blueberry</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=bud-green"
                                    style="background-color: #6fa362" class="no-ajaxify innerAll half">
                                        <span class="hide">bud-green</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=coral"
                                    style="background-color: #7eccc2" class="no-ajaxify innerAll half">
                                        <span class="hide">coral</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?module=admin&page=layout&section=layout-fluid&url_rewrite=&build=&v=v1.0.1-rc2&skin=burnt-sienna"
                                    style="background-color: #E4968A" class="no-ajaxify innerAll half">
                                        <span class="hide">burnt-sienna</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="hasSubmenu">
                        <a href="#sidebar-fusion-components" data-toggle="collapse"><i class="fa fa-th-large"></i><span>Components</span></a>
                        <ul id="sidebar-fusion-components" class="collapse">
                            <li class=""><a href="../ui.html?lang=en"><i class="fa fa-circle-o"></i> UI Elements</a>
                            </li>
                            <li class=""><a href="../icons.html?lang=en"><i class="fa fa-circle-o"></i> Icons</a>
                            </li>
                            <li class=""><a href="../typography.html?lang=en"><i class="fa fa-circle-o"></i> Typography</a>
                            </li>
                            <li class=""><a href="../calendar.html?lang=en"><i class="fa fa-circle-o"></i> Calendar</a>
                            </li>
                            <li class=""><a href="../tabs.html?lang=en"><i class="fa fa-circle-o"></i> Tabs</a>
                            </li>
                            <li class="hasSubmenu">
                                <a href="#menu_tables" data-toggle="collapse">
                                    <span class="badge badge-primary pull-right">3</span><i class="fa fa-circle-o"></i> Tables</a>
                                <ul class="collapse" id="menu_tables">
                                    <li class=""><a href="../tables.html?lang=en">Tables</a>
                                    </li>
                                    <li class=""><a href="../tables_responsive.html?lang=en">Responsive Tables</a>
                                    </li>
                                    <li class=""><a href="../pricing_tables.html?lang=en">Pricing Tables</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="hasSubmenu">
                                <a href="#menu_forms" data-toggle="collapse">
                                    <span class="badge badge-primary pull-right">4</span><i class="fa fa-circle-o"></i> Forms</a>
                                <ul class="collapse" id="menu_forms">
                                    <li class=""><a href="../form_wizards.html?lang=en">Form Wizards</a>
                                    </li>
                                    <li class=""><a href="../form_elements.html?lang=en">Form Elements</a>
                                    </li>
                                    <li class=""><a href="../form_validator.html?lang=en">Form Validator</a>
                                    </li>
                                    <li class=""><a href="../file_managers.html?lang=en">File Managers</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=""><a href="../sliders.html?lang=en"><i class="fa fa-circle-o"></i> Sliders</a>
                            </li>
                            <li class=""><a href="../charts.html?lang=en"><i class="fa fa-circle-o"></i> Charts</a>
                            </li>
                            <li class=""><a href="../grid.html?lang=en"><i class="fa fa-circle-o"></i> Grid</a>
                            </li>
                            <li class=""><a href="../notifications.html?lang=en"><i class="fa fa-circle-o"></i> Notifications</a>
                            </li>
                            <li class=""><a href="../modals.html?lang=en"><i class="fa fa-circle-o"></i> Modals</a>
                            </li>
                            <li class=""><a href="../thumbnails.html?lang=en"><i class="fa fa-circle-o"></i> Thumbnails</a>
                            </li>
                            <li class=""><a href="../carousels.html?lang=en"><i class="fa fa-circle-o"></i> Carousels</a>
                            </li>
                            <li class=""><a href="../image_crop.html?lang=en"><i class="fa fa-circle-o"></i> Image Cropping</a>
                            </li>
                            <li class=""><a href="../twitter.html?lang=en"><i class="fa fa-circle-o"></i> Twitter API</a>
                            </li>
                            <li class=""><a href="../infinite_scroll.html?lang=en"><i class="fa fa-circle-o"></i> Infinite Scroll</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hasSubmenu">
                        <a href="#sidebar-fusion-extra" data-toggle="collapse"><i class="fa fa-gift"></i><span>Extra</span></a>
                        <ul id="sidebar-fusion-extra" class="collapse">
                            <li class="hasSubmenu">
                                <a href="#sidebar-fusion-dashboard" data-toggle="collapse"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                                <ul id="sidebar-fusion-dashboard" class="collapse">
                                    <li>
                                        <a href="../dashboard_analytics.html?lang=en"><i class="fa fa-bar-chart-o"></i> Analytics</a>
                                    </li>
                                    <li>
                                        <a href="../dashboard_users.html?lang=en"><i class="fa fa-user"></i> Users</a>
                                    </li>
                                    <li>
                                        <a href="../dashboard_overview.html?lang=en"><i class="fa fa-dashboard"></i> Overview</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="hasSubmenu">
                                <a href="#sidebar-fusion-email" class="glyphicons envelope" data-toggle="collapse"><i></i><span class="badge pull-right badge-primary">30</span><span>Email</span></a>
                                <ul id="sidebar-fusion-email" class="animated fadeIn collapse">
                                    <li><a href="../email.html?lang=en"><i class="fa fa-envelope"></i> Inbox</a>
                                    </li>
                                    <li>
                                        <a href="../email_compose.html?lang=en"><i class="fa fa-pencil"></i> Compose</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="../events.html?lang=en" class="glyphicons google_maps"><i></i><span class="badge pull-right badge-primary">5</span><span>Events</span></a>
                            </li>
                            <li class="hasSubmenu">
                                <a href="#sidebar-fusion-maps" class="glyphicons google_maps" data-toggle="collapse"><i></i><span>Maps</span></a>
                                <ul id="sidebar-fusion-maps" class="animated fadeIn collapse">
                                    <li><a href="../maps_vector.html?lang=en"><i class="fa fa-map-marker"></i> Vector Maps</a>
                                    </li>
                                    <li><a href="../maps_google.html?lang=en"><i class="fa fa-map-marker"></i> Google Maps</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="../employees.html?lang=en"><i class="fa fa-user"></i><span>Employees</span></a>
                            </li>
                            <li class="hasSubmenu">
                                <a href="#sidebar-fusion-medical" data-toggle="collapse" class="glyphicons circle_plus"><i></i><span>Medical</span></a>
                                <ul id="sidebar-fusion-medical" class="animated fadeIn collapse">
                                    <li class="">
                                        <a href="../medical_overview.html?lang=en"><i class="fa fa-medkit"></i> Overview</a>
                                    </li>
                                    <li class="">
                                        <a href="../medical_patients.html?lang=en">
                                            <span class="badge pull-right badge-primary">2</span><i class="fa fa-user-md"></i> Patients</a>
                                    </li>
                                    <li class="">
                                        <a href="../medical_appointments.html?lang=en"><i class="fa fa-stethoscope"></i> Appointments</a>
                                    </li>
                                    <li class="">
                                        <a href="../medical_memos.html?lang=en"><i class="fa fa-file-text-o"></i> Memos</a>
                                    </li>
                                    <li class="border-bottom-none">
                                        <a href="../medical_metrics.html?lang=en"><i class="fa fa-bar-chart-o"></i> Metrics</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="hasSubmenu">
                                <a href="#sidebar-fusion-learning" data-toggle="collapse" class="glyphicons crown"><i></i><span>Courses</span></a>
                                <ul id="sidebar-fusion-learning" class="collapse">
                                    <li class=""><a href="../courses_2.html?lang=en"><i class="fa fa-book"></i><span>Courses Home</span></a>
                                    </li>
                                    <li class="">
                                        <a href="../courses_listing.html?lang=en"><i class="fa fa-book"></i>
                                            <span>Courses Listing</span>
                                        </a>
                                    </li>
                                    <li class=""><a href="../course.html?lang=en"><i class="fa fa-book"></i><span>Course page</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="hasSubmenu">
                                <a href="#sidebar-fusion-content" data-toggle="collapse" class="glyphicons notes_2"><i></i><span>Content</span></a>
                                <ul id="sidebar-fusion-content" class="collapse">
                                    <li><a href="../news.html?lang=en"><i class="fa fa-file-text"></i> News</a>
                                    </li>
                                    <li><a href="../faq.html?lang=en"><i class="fa fa-question-circle"></i> FAQ</a>
                                    </li>
                                    <li><a href="../search.html?lang=en"><i class="fa fa-search"></i> Search</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="hasSubmenu">
                                <a href="#sidebar-fusion-financial" data-toggle="collapse" class="glyphicons calculator"><i></i><span>Financial</span></a>
                                <ul id="sidebar-fusion-financial" class="animated fadeIn collapse">
                                    <li><a href="../invoice.html?lang=en"><i class="fa fa-file-text-o"></i> Invoice</a>
                                    </li>
                                    <li><a href="../finances.html?lang=en"><i class="fa fa-legal"></i> Finances</a>
                                    </li>
                                    <li><a href="../bookings.html?lang=en"><i class="fa fa-ticket"></i> Bookings</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="hasSubmenu">
                                <a href="#sidebar-fusion-support" data-toggle="collapse" class="glyphicons life_preserver"><i></i><span>Support</span></a>
                                <ul id="sidebar-fusion-support" class="collapse">
                                    <li>
                                        <a href="../support_tickets.html?lang=en">
                                            <span class="badge pull-right badge-primary">45</span><i class="fa fa-ticket"></i>
                                            <span>Tickets</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../support_forum_overview.html?lang=en"><i class="fa fa-folder-o"></i>
                                            <span>Forum overview</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../support_forum_post.html?lang=en"><i class="fa fa-folder-o"></i>
                                            <span>Forum post</span>
                                        </a>
                                    </li>
                                    <li><a href="../support_kb.html?lang=en"><i class="fa fa-file-text-o"></i><span>Knowledge Base</span></a>
                                    </li>
                                    <li>
                                        <a href="../support_questions.html?lang=en">
                                            <span class="badge pull-right badge-primary">7</span><i class="fa fa-question"></i>
                                            <span>Questions</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../support_answers.html?lang=en"><i class="fa fa-info"></i>
                                            <span>Answers</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="hasSubmenu">
                                <a href="#sidebar-fusion-shop" data-toggle="collapse" class="glyphicons shopping_cart"><i></i><span>eCommerce</span></a>
                                <ul id="sidebar-fusion-shop" class="collapse">
                                    <li>
                                        <a href="../shop_products.html?lang=en"><i class="fa fa-list"></i>
                                            <span>Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../shop_edit_product.html?lang=en"><i class="fa fa-edit"></i>
                                            <span>Edit product</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="hasSubmenu">
                                <a href="#sidebar-fusion-account" data-toggle="collapse" class="glyphicons user"><i></i><span>Account</span></a>
                                <ul id="sidebar-fusion-account" class="animated fadeIn collapse">
                                    <li>
                                        <a href="../login.html?lang=en" class="no-ajaxify"><i class="fa fa-lock"></i> Login</a>
                                    </li>
                                    <li>
                                        <a href="../signup.html?lang=en" class="no-ajaxify"><i class="fa fa-pencil"></i> Signup</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="../surveys_multiple.html?lang=en" class="glyphicons turtle no-ajaxify"><i></i><span>Surveys</span></a>
                            </li>
                            <li><a href="../error.html?lang=en" class="glyphicons warning_sign"><i></i><span>Error</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="hasSubmenu">
                        <a href="#sidebar-fusion-example" data-toggle="collapse">
                            <span class="badge pull-right badge-primary">4</span><i class="fa fa-stack-exchange"></i>
                            <span>Submenus</span>
                        </a>
                        <ul id="sidebar-fusion-example" class="collapse">
                            <li><a href=""><i class="fa fa-flash"></i><span>Active</span></a>
                            </li>
                            <li><a href=""><i class="fa fa-male"></i><span>Menu item</span></a>
                            </li>
                            <li><a href=""><i class="fa fa-comments-o"></i><span>Menu item</span></a>
                            </li>
                            <li class="menu hasSubmenu">
                                <a href="#submenu" data-toggle="collapse">
                                    <span class="badge pull-right badge-primary">3</span><i class="fa fa-envelope"></i>
                                    <span>2nd level</span>
                                </a>
                                <ul class="collapse menu" id="submenu">
                                    <li><a href=""><i class="fa fa-circle-o"></i><span>Menu item</span></a>
                                    </li>
                                    <li><a href=""><i class="fa fa-circle-o"></i><span>Menu item</span></a>
                                    </li>
                                    <li><a href=""><i class="fa fa-circle-o"></i><span>Menu item</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="category">News Feeds</li>
                    <li class="reset">
                        <ul>
                            <li class="media news-item">
                                <span class="news-item-success pull-right "><i class="fa fa-circle"></i>
                                </span>
                                <span class="pull-left media-object">
                                    <i class="fa fa-fw fa-bell"></i>
                                </span>
                                <div class="media-body">
                                    <a href="" class="text-white">Adrian</a> just
                                    logged in
                                    <span class="time">2 min ago</span>
                                </div>
                            </li>
                            <li class="media news-item">
                                <span class="news-item-success pull-right "><i class="fa fa-circle"></i>
                                </span>
                                <span class="pull-left media-object">
                                    <i class="fa fa-fw fa-bell"></i>
                                </span>
                                <div class="media-body">
                                    <a href="" class="text-white">Adrian</a> just
                                    added <a href="" class="text-white">mosaicpro</a> as
                                    their office
                                    <span class="time">2 min ago</span>
                                </div>
                            </li>
                            <li class="media news-item">
                                <span class="pull-left media-object">
                                    <i class="fa fa-fw fa-bell"></i>
                                </span>
                                <div class="media-body">
                                    <a href="" class="text-white">Adrian</a> just
                                    logged in
                                    <span class="time">2 min ago</span>
                                </div>
                            </li>
                            <li class="media news-item">
                                <span class="pull-left media-object">
                                    <i class="fa fa-fw fa-bell"></i>
                                </span>
                                <div class="media-body">
                                    <a href="" class="text-white">Adrian</a> just
                                    logged in
                                    <span class="time">2 min ago</span>
                                </div>
                            </li>
                            <li class="media news-item">
                                <span class="pull-left media-object">
                                    <i class="fa fa-fw fa-bell"></i>
                                </span>
                                <div class="media-body">
                                    <a href="" class="text-white">Adrian</a> just
                                    logged in
                                    <span class="time">2 min ago</span>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="category">Filter</li>
                    <li class="reset">
                        <div class="innerLR innerB">
                            <ul>
                                <li>
                                    <a href="">
                                        <span class="fa fa-fw fa-circle-o text-success"></span>Work Related</a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="fa fa-fw fa-circle-o text-primary"></span>Very Important</a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="fa fa-fw fa-circle-o text-info"></span>Friends &amp; Family</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- // Main Sidebar Menu END -->
        <div id="menu-right">
            <div>
                <button class="btn btn-inverse btn-xs btn-close" data-toggle="sidr-close" data-menu="menu-right"><i class="fa fa-times"></i>
                </button>
                <div class="tab-content">
                    <div class="tab-pane" id="chat-conversation">
                        <ul>
                            <li>
                                <div class="innerAll">
                                    <button class="btn btn-primary" data-toggle="tab"
                                    data-target="#chat-list"><i class="fa fa-fw fa-user"></i> friends</button>
                                </div>
                            </li>
                            <li class="conversation innerAll">
                                <!-- Media item -->
                                <div class="media">
                                    <small class="author"><a href="#" title="" class="strong">Jane Doe</a>
                                    </small>
                                    <div class="media-object pull-left">
                                        <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/50/1.jpg"
                                        alt="Image" class="img-circle" />
                                    </div>
                                    <div class="media-body">
                                        <blockquote>
                                            <small class="date">
                                                <cite>just now</cite>
                                            </small>
                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Necessitatibus,
                                                sit?</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <!-- // Media item END -->
                                <!-- Media item -->
                                <div class="media primary right">
                                    <small class="author"><a href="#" title="" class="strong">John Doe</a>
                                    </small>
                                    <div class="media-object pull-right">
                                        <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/50/2.jpg"
                                        alt="Image" class="img-circle" />
                                    </div>
                                    <div class="media-body">
                                        <blockquote class="pull-right">
                                            <small class="date">
                                                <cite>15 seconds ago</cite>
                                            </small>
                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Quo, molestiae!</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <!-- // Media item END -->
                                <!-- Media item -->
                                <div class="media">
                                    <small class="author"><a href="#" title="" class="strong">Ricky</a>
                                    </small>
                                    <div class="media-object pull-left">
                                        <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/50/1.jpg"
                                        alt="Image" class="img-circle" />
                                    </div>
                                    <div class="media-body">
                                        <blockquote>
                                            <small class="date">
                                                <cite>5 minutes ago</cite>
                                            </small>
                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Doloremque, distinctio!</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <!-- // Media item END -->
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane active" id="chat-list">
                        <div class="mixitup" id="mixitup-chat" data-show-default="mixit-chat-1" data-layout-mode="list"
                        data-target-selector=".mix" data-filter-selector=".filter-chat">
                            <ul>
                                <li class="category">Groups</li>
                                <li class="reset">
                                    <div class="innerLR">
                                        <ul>
                                            <li class="filter-chat" data-filter="mixit-chat-1">
                                                <a href="" class="no-ajaxify">
                                                    <span class="fa fa-fw fa-circle-o text-success"></span>Work Related</a>
                                            </li>
                                            <li class="filter-chat" data-filter="mixit-chat-2">
                                                <a href="" class="no-ajaxify">
                                                    <span class="fa fa-fw fa-circle-o text-primary"></span>Very Important</a>
                                            </li>
                                            <li class="filter-chat" data-filter="mixit-chat-3">
                                                <a href="" class="no-ajaxify">
                                                    <span class="fa fa-fw fa-circle-o text-info"></span>Friends &amp; Family</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category border-bottom">Online</li>
                                <li>
                                    <div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
                                        <a href="#chat-conversation" data-toggle="tab" class="pull-left media-object">
                                            <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/35/1.jpg"
                                            class="img-circle" />
                                        </a>
                                        <div class="media-body">
                                            <a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab"
                                                class="text-white">Perpetua Inger</a>
                                            </h5>
                                            <small>Hey, the party is on tonight!</small>
                                        </div>
                                    </div>
                                    <div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
                                        <a href="#chat-conversation" data-toggle="tab" class="pull-left media-object">
                                            <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/35/2.jpg"
                                            class="img-circle" />
                                        </a>
                                        <div class="media-body">
                                            <a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab"
                                                class="text-white">Zoticus Axel</a>
                                            </h5>
                                            <small>Hey, the party is on tonight!</small>
                                        </div>
                                    </div>
                                    <div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
                                        <a href="#chat-conversation" data-toggle="tab" class="pull-left media-object">
                                            <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/35/3.jpg"
                                            class="img-circle" />
                                        </a>
                                        <div class="media-body">
                                            <a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab"
                                                class="text-white">Yun Ragna</a>
                                            </h5>
                                            <small>Hey, the party is on tonight!</small>
                                        </div>
                                    </div>
                                    <div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
                                        <a href="#chat-conversation" data-toggle="tab" class="pull-left media-object">
                                            <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/35/4.jpg"
                                            class="img-circle" />
                                        </a>
                                        <div class="media-body">
                                            <a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab"
                                                class="text-white">Victor Tacitus</a>
                                            </h5>
                                            <small>Hey, the party is on tonight!</small>
                                        </div>
                                    </div>
                                    <div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
                                        <a href="#chat-conversation" data-toggle="tab" class="pull-left media-object">
                                            <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/35/5.jpg"
                                            class="img-circle" />
                                        </a>
                                        <div class="media-body">
                                            <a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab"
                                                class="text-white">Arden Catharine</a>
                                            </h5>
                                            <small>Hey, the party is on tonight!</small>
                                        </div>
                                    </div>
                                    <div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
                                        <a href="#chat-conversation" data-toggle="tab" class="pull-left media-object">
                                            <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/35/6.jpg"
                                            class="img-circle" />
                                        </a>
                                        <div class="media-body">
                                            <a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab"
                                                class="text-white">Mihovil Govinda</a>
                                            </h5>
                                            <small>Hey, the party is on tonight!</small>
                                        </div>
                                    </div>
                                    <div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
                                        <a href="#chat-conversation" data-toggle="tab" class="pull-left media-object">
                                            <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/35/7.jpg"
                                            class="img-circle" />
                                        </a>
                                        <div class="media-body">
                                            <a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab"
                                                class="text-white">Mariya Hadya</a>
                                            </h5>
                                            <small>Hey, the party is on tonight!</small>
                                        </div>
                                    </div>
                                    <div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
                                        <a href="#chat-conversation" data-toggle="tab" class="pull-left media-object">
                                            <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/35/8.jpg"
                                            class="img-circle" />
                                        </a>
                                        <div class="media-body">
                                            <a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab"
                                                class="text-white">Tahir Benedikt</a>
                                            </h5>
                                            <small>Hey, the party is on tonight!</small>
                                        </div>
                                    </div>
                                    <div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
                                        <a href="#chat-conversation" data-toggle="tab" class="pull-left media-object">
                                            <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/35/9.jpg"
                                            class="img-circle" />
                                        </a>
                                        <div class="media-body">
                                            <a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab"
                                                class="text-white">Olayinka Kristin</a>
                                            </h5>
                                            <small>Hey, the party is on tonight!</small>
                                        </div>
                                    </div>
                                    <div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
                                        <a href="#chat-conversation" data-toggle="tab" class="pull-left media-object">
                                            <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/35/10.jpg"
                                            class="img-circle" />
                                        </a>
                                        <div class="media-body">
                                            <a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab"
                                                class="text-white">Danko Nikodim</a>
                                            </h5>
                                            <small>Hey, the party is on tonight!</small>
                                        </div>
                                    </div>
                                    <div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
                                        <a href="#chat-conversation" data-toggle="tab" class="pull-left media-object">
                                            <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/35/11.jpg"
                                            class="img-circle" />
                                        </a>
                                        <div class="media-body">
                                            <a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab"
                                                class="text-white">Zoja Aileas</a>
                                            </h5>
                                            <small>Hey, the party is on tonight!</small>
                                        </div>
                                    </div>
                                    <div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
                                        <a href="#chat-conversation" data-toggle="tab" class="pull-left media-object">
                                            <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/35/12.jpg"
                                            class="img-circle" />
                                        </a>
                                        <div class="media-body">
                                            <a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab"
                                                class="text-white">Alphonsus Braidy</a>
                                            </h5>
                                            <small>Hey, the party is on tonight!</small>
                                        </div>
                                    </div>
                                    <div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
                                        <a href="#chat-conversation" data-toggle="tab" class="pull-left media-object">
                                            <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/35/13.jpg"
                                            class="img-circle" />
                                        </a>
                                        <div class="media-body">
                                            <a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab"
                                                class="text-white">Helene Liana</a>
                                            </h5>
                                            <small>Hey, the party is on tonight!</small>
                                        </div>
                                    </div>
                                    <div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
                                        <a href="#chat-conversation" data-toggle="tab" class="pull-left media-object">
                                            <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/35/14.jpg"
                                            class="img-circle" />
                                        </a>
                                        <div class="media-body">
                                            <a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab"
                                                class="text-white">Sebastian Niklas</a>
                                            </h5>
                                            <small>Hey, the party is on tonight!</small>
                                        </div>
                                    </div>
                                    <div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
                                        <a href="#chat-conversation" data-toggle="tab" class="pull-left media-object">
                                            <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/35/15.jpg"
                                            class="img-circle" />
                                        </a>
                                        <div class="media-body">
                                            <a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab"
                                                class="text-white">Elvire Maya</a>
                                            </h5>
                                            <small>Hey, the party is on tonight!</small>
                                        </div>
                                    </div>
                                    <div class=" mix media border-bottom innerAll margin-none">
                                        <a href="#chat-conversation" data-toggle="tab" class="pull-left media-object">
                                            <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/35/16.jpg"
                                            class="img-circle" />
                                        </a>
                                        <div class="media-body">
                                            <a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
                                                <i class="fa fa-comments"></i> 4
                                            </a>
                                            <h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab"
                                                class="text-white">Kerman Otakar</a>
                                            </h5>
                                            <small>Hey, the party is on tonight!</small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content START -->
        <div id="content">
            <div class="navbar hidden-print navbar-default box main" role="navigation">
                <div class="user-action user-action-btn-navbar pull-right border-left">
                    <a href="#menu-right" class="btn btn-sm btn-navbar btn-open-right"><i class="fa fa-comments fa-2x"></i></a>
                </div>
                <div class="user-action user-action-btn-navbar pull-left">
                    <a href="#menu" class="btn btn-sm btn-navbar btn-open-left"><i class="fa fa-bars fa-2x"></i></a>
                </div>
                <ul class="notifications pull-left hidden-xs">
                    <li class="dropdown notif">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="notif-block icon-envelope-1"></i><span class="fa fa-star"></span></a>
                        <ul class="dropdown-menu chat media-list">
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object thumb" src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/100/15.jpg"
                                    alt="50x50" width="50" />
                                </a>
                                <div class="media-body">
                                    <span class="label label-default pull-right">5 min</span>
                                    <h5 class="media-heading">Adrian D.</h5>
                                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.</p>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object thumb" src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/100/16.jpg"
                                    alt="50x50" width="50" />
                                </a>
                                <div class="media-body">
                                    <span class="label label-default pull-right">2 days</span>
                                    <h5 class="media-heading">Jane B.</h5>
                                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.</p>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object thumb" src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/100/17.jpg"
                                    alt="50x50" width="50" />
                                </a>
                                <div class="media-body">
                                    <span class="label label-default pull-right">3 days</span>
                                    <h5 class="media-heading">Andrew M.</h5>
                                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.</p>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="user-action pull-left menu-right-hidden-xs menu-left-hidden-xs border-left">
                    <div class="dropdown username pull-left">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="media margin-none">
                                <span class="pull-left">
                                    <img src="<?php echo yii::app()->theme->baseurl; ?>/css/images/people/35/16.jpg"
                                    alt="user" class="img-circle">
                                </span>
                                <span class="media-body">Bill
                                    <span class="caret"></span>
                                </span>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../about_1.html?lang=en">About</a>
                            </li>
                            <li><a href="../messages.html?lang=en">Messages</a>
                            </li>
                            <li><a href="../timeline_3.html?lang=en">Profile</a>
                            </li>
                            <li><a href="../login.html?lang=en">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="input-group hidden-xs pull-left">
                    <span class="input-group-addon"><i class="icon-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Search a friend" />
                </div>
            </div>
            <!-- <div class="layout-app">  -->
            <div>
                <?php echo $content?>
                
            </div>
        </div>
        <!-- // Content END -->
        <div class="clearfix"></div>
        <!-- // Sidebar menu & content wrapper END -->
        <!-- Footer -->
        
        <!-- // Footer END -->
    </div>
    <!-- // Main Container Fluid END -->
    <!-- Global -->
    <script data-id="App.Config">
    var App = {};
    var basePath = '../',
        commonPath = '<?php echo yii::app()->theme->baseurl; ?>/css/',
        rootPath = '../../',
        DEV = false,
        componentsPath = '<?php echo yii::app()->theme->baseurl; ?>/css/components/';
    var primaryColor = '#25ad9f',
        dangerColor = '#b55151',
        successColor = '#609450',
        infoColor = '#4a8bc2',
        warningColor = '#ab7a4b',
        inverseColor = '#45484d';
    var themerPrimaryColor = primaryColor;
    </script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/css/components/library/bootstrap/js/bootstrap.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/plugins/breakpoints/breakpoints.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/plugins/preload/pace/pace.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/plugins/menus/sidr/jquery.sidr.js?v=v1.0.1-rc2"></script>
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/core/js/sidebar.main.init.js?v=v1.0.1-rc2"></script>
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/core/js/sidebar.collapse.init.js?v=v1.0.1-rc2"></script>
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/common/forms/elements/bootstrap-select/assets/lib/js/bootstrap-select.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/common/forms/elements/bootstrap-select/assets/custom/js/bootstrap-select.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/modules/admin/menus/menus.sidebar.chat.init.js?v=v1.0.1-rc2"></script>
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/plugins/mixitup/jquery.mixitup.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/plugins/mixitup/mixitup.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"></script>
    <script src="<?php echo yii::app()->theme->baseurl; ?>/css/components/core/js/core.init.js?v=v1.0.1-rc2"></script>
</body>
</html>