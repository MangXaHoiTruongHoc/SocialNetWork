<?php
/* @var $this SiteController */
$this->layout="//layouts/index"; //dua layout theo muon
$this->pageTitle=Yii::app()->name;
?>
<?php  

        if(isset(yii::app()->session['email'])){
        	if(isset(yii::app()->session['matk2'])){
                unset(Yii::app()->session['matk2']);
                echo yii::app()->session['matk2'];
            }
    ?>
	 <!-- Widget -->
    <div class="widget gridalicious-item not-responsive">
        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/dhkt/status.jpg" alt="" class="img-responsive"
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
                    <img style="width:100px!important;height:100px!important" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/dhkt/sinhvien1.jpg"
                    alt="" class="img-post display-block-inline"
                    />
                </a>
                <a href="">
                    <img  style="width:100px!important;height:100px!important"  src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/dhkt/sv2.jpg"
                    alt="" class="img-post display-block-inline"
                    />
                </a>
                <a href="">
                    <img  style="width:100px!important;height:100px!important"  src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/dhkt/sv3.jpg"
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
        <?php
        // Lấy mã tài khoản để thực hiện truy vấn không hiển thị tên người đang sử dụng tài khoản.
        $mtk = yii::app()->session['ma_tai_khoan'];
        $nguoidung = Taikhoan::model()->findall(array('condition'=>'ma_tai_khoan NOT IN (:matk)','params'=>array(':matk'=>$mtk)));
        // end truy vấn
        foreach ($nguoidung as $tk ) {
        	
        ?>

        <div class="media border-bottom margin-none bg-gray">
            <a href="" class="pull-left innerAll half">
                <img style="width:50px!important;height:50px!important"  src="<?php echo Yii::app()->baseUrl; ?>/upload/avarta/<?php echo $tk->hinh_dai_dien?>"

                class="media-object">
            </a>
            <div class="media-body innerTB">
                <a href="#" class="pull-right innerT innerR text-muted">
                    <i class="icon-reply-all-fill fa fa-2x "></i>
                </a>
                <a href="index.php?iduser=<?php echo $tk->ma_tai_khoan ?>" class="strong text-inverse"><?php echo $tk->ho_ten?></a> 
                <small
                class="text-muted ">wrote on Jan 15th, 2014</small>
                    <a
                    href="" class="text-small">mark it</a>
                        <div>- Happy B-Day!</div>
            </div>
        </div>
        <?php
    	}
        ?>
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
                <img style="width:100px!important;height:100px!important" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/dhkt/sinhvien1.jpg"
                alt="" class="img-post display-block-inline"
                />
            </a>
            <a href="">
                <img  style="width:100px!important;height:100px!important"  src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/dhkt/sv2.jpg"
                alt="" class="img-post display-block-inline"
                />
            </a>
            <a href="">
                <img  style="width:100px!important;height:100px!important"  src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/dhkt/sv3.jpg"
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
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/dhkt/status.jpg"
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
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/dhkt/status.jpg"
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

<?php
}
?>