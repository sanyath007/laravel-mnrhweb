<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{{ config('app.name', 'กลุ่มงานเวชกรรมสังคม โรงพยาบาลมหาราชนครราชสีมา') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Icon -->
    <link rel="icon" href="{{ asset('uploads/icon/favicon.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('uploads/icon/favicon.ico') }}" type="image/x-icon">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/bower/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">
    <!-- CSS Main web -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <!-- CSS Social Icon Strip Footer -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com"> -->
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.js"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ asset('/bower/moment/moment.js') }}"></script>
    <script src="{{ asset('/bower/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    
</head>
<body id="page-top" name="page-top" class="active">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!-- Social media menu (Left side) -->
                <a  class="nav-btn btn-dark btn-lg accordion-toggle pull-left" title="Follow Us"
                    role="tab" id="social-collapse" data-toggle="collapse" data-parent="#accordion"
                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></a>
                <!-- Social media menu (Left side) -->
                
                <!-- Hamburger menu (Right side) -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- <a id="menu-toggle" href="#" class="nav-btn btn-dark btn-lg toggle">
                    <i class="fa fa-bars" style="color:#fff;"></i>
                </a> -->
                <!-- Hamburger menu (Right side) -->

                <!-- To top button (bottom right side) -->
                <a id="to-top" class="btn btn-lg btn-inverse" href="#top">
                    <span class="sr-only">Toggle to Top Navigation</span>
                    <i class="fa fa-chevron-up"></i>
                </a>
                <!-- To top button (bottom right side) -->
            </div><!-- /.navbar-header -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="navbar" class="collapse navbar-collapse js-navbar-collapse">
                <!-- Pull left menu -->
                <ul class="nav navbar-nav navbar-left">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- <img height="25" width="25" src="dist/img/logo-mnrh.jpg" class="img-responsive pull-left" alt="Responsive image"> -->
                        {{ config('app.name', 'กลุ่มงานเวชกรรมสังคม') }}
                    </a>

                    <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                    <!-- About menu -->
                    <!-- <li class="dropdown mega-dropdown"> -->
                    <li class="dropdown dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            เกี่ยวกับเรา <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">ประวัติความเป็นมา</a></li>
                            <li><a href="{{ url('/site/structure') }}">โครงสร้างหน่วยงาน</a></li>
                            <li><a href="{{ url('/site/vision') }}">วิสัยทัศน์</a></li>
                            <li><a href="{{ url('/site/mission') }}">พันธกิจ</a></li>
                            <li><a href="{{ url('/site/goal') }}">เข็มมุ่ง</a></li>
                            <li class="divider"></li>
                            <li><a href="#">พื้นที่ให้บริการ</a></li>
                        </ul>
                        <!-- <ul class="dropdown-menu mega-dropdown-menu">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Men Collection</li>
                                    <div id="menCollection" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="#">
                                                    <img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1">
                                                </a>
                                                <h4><small>Summer dress floral prints</small></h4>
                                                <button class="btn btn-primary" type="button">
                                                    49,99 €
                                                </button>
                                                <button href="#" class="btn btn-default" type="button">
                                                    <span class="glyphicon glyphicon-heart"></span> Add to Wishlist
                                                </button>
                                            </div> --><!-- End Item -->
                                            <!-- <div class="item">
                                                <a href="#">
                                                    <img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2">
                                                </a>
                                                <h4><small>Gold sandals with shiny touch</small></h4>
                                                <button class="btn btn-primary" type="button">
                                                    9,99 €
                                                </button>
                                                <button href="#" class="btn btn-default" type="button">
                                                    <span class="glyphicon glyphicon-heart"></span> Add to Wishlist
                                                </button>
                                            </div> --><!-- End Item -->
                                            <!-- <div class="item">
                                                <a href="#">
                                                    <img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3">
                                                </a>
                                                <h4><small>Denin jacket stamped</small></h4>
                                                <button class="btn btn-primary" type="button">
                                                    49,99 €
                                                </button>
                                                <button href="#" class="btn btn-default" type="button">
                                                    <span class="glyphicon glyphicon-heart"></span> Add to Wishlist
                                                </button>
                                            </div> --><!-- End Item -->
                                        <!-- </div> --><!-- End Carousel Inner -->

                                        <!-- Controls -->
                                        <!-- <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> --><!-- /.carousel -->
                                    <!-- <li class="divider"></li>
                                    <li>
                                        <a href="#">View all Collection
                                            <span class="glyphicon glyphicon-chevron-right pull-right"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Features</li>
                                    <li><a href="#">Auto Carousel</a></li>
                                    <li><a href="#">Carousel Control</a></li>
                                    <li><a href="#">Left & Right Navigation</a></li>
                                    <li><a href="#">Four Columns Grid</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Fonts</li>
                                    <li><a href="#">Glyphicon</a></li>
                                    <li><a href="#">Google Fonts</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Plus</li>
                                    <li><a href="#">Navbar Inverse</a></li>
                                    <li><a href="#">Pull Right Elements</a></li>
                                    <li><a href="#">Coloured Headers</a></li>
                                    <li><a href="#">Primary Buttons & Default</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Much more</li>
                                    <li><a href="#">Easy to Customize</a></li>
                                    <li><a href="#">Calls to action</a></li>
                                    <li><a href="#">Custom Fonts</a></li>
                                    <li><a href="#">Slide down on Hover</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <!-- About menu -->

                    <!-- Department menu -->
                    <!-- <li class="dropdown mega-dropdown"> -->
                    <li class="dropdown dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">หน่วยงานภายใน <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">กลุ่มงานเวชกรรมสังคม</a></li>
                            <li class="divider"></li>
                            <li><a href="#">ศูนย์สุขภาพชุมชนเมือง 1 หัวทะเล</a></li>
                            <li><a href="#">ศูนย์สุขภาพชุมชนเมือง 2 วัดป่าสาละวัน</a></li>
                            <li><a href="#">คลินิกเวชปฎิบัติครอบครัว</a></li>
                            <li><a href="#">ศู่นย์บริการสาธารณสุขคลินิกชุมชนจอหอ</a></li>
                        </ul>
                        <!-- <ul class="dropdown-menu mega-dropdown-menu">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Features</li>
                                    <li><a href="#">Auto Carousel</a></li>
                                    <li><a href="#">Carousel Control</a></li>
                                    <li><a href="#">Left & Right Navigation</a></li>
                                    <li><a href="#">Four Columns Grid</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Fonts</li>
                                    <li><a href="#">Glyphicon</a></li>
                                    <li><a href="#">Google Fonts</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Plus</li>
                                    <li><a href="#">Navbar Inverse</a></li>
                                    <li><a href="#">Pull Right Elements</a></li>
                                    <li><a href="#">Coloured Headers</a></li>
                                    <li><a href="#">Primary Buttons & Default</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Much more</li>
                                    <li><a href="#">Easy to Customize</a></li>
                                    <li><a href="#">Calls to action</a></li>
                                    <li><a href="#">Custom Fonts</a></li>
                                    <li><a href="#">Slide down on Hover</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Women Collection</li>
                                    <div id="womenCollection" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                                <h4><small>Summer dress floral prints</small></h4>
                                                <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                            </div> --><!-- End Item -->
                                            <!-- <div class="item">
                                                <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                                <h4><small>Gold sandals with shiny touch</small></h4>
                                                <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                            </div> --><!-- End Item -->
                                            <!-- <div class="item">
                                                <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                                <h4><small>Denin jacket stamped</small></h4>
                                                <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                            </div> --><!-- End Item -->
                                        <!-- </div> --><!-- End Carousel Inner -->
                                        <!-- Controls -->
                                        <!-- <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div> --><!-- /.carousel -->
                                    <!-- <li class="divider"></li>
                                    <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <!-- Department menu -->

                    <li><a href="{{ url('/site/service') }}">ตารางการให้บริการ</a></li>
                    <li><a href="{{ url('/site/contactus') }}">ติดต่อเรา</a></li>
                    <li><a href="{{ url('/site/location') }}">แผนที่</a></li>
                </ul>
                <!-- Pull left menu -->

                <!-- Pull right menu -->
                <!-- <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                    <li><a href="#">My cart (0) items</a></li> -->
                    <!-- Pull right menu -->
                <!-- </ul> -->
            </div><!-- /.nav-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- Sidebar -->
    <!-- <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-danger pull-right hidden-md hidden-lg toggle">
                <i class="fa fa-times"></i>
            </a>
            <li class="sidebar-brand">
                <a href="#top">Soldier-up <strong>Designs</strong></a>
            </li>
            <li>
                <a href="/" title="Go to Top">Home</a>
            </li>
            <li>
                <a href="/about" title="Go to About Us section">About</a>
            </li>
            <li>
                <a href="/resume" title="Navigate to Jonathan Adcox IT Resume">Resume</a>
            </li>
            <li>
                <a href="/portfolio" title="Navigate to 'Our Services' section">Portfolio</a>
            </li>
            <li>
                <a href="/blog" title="Our Blog">Blog</a>
            </li>
            <li>
                <a data-toggle="modal" data-href="#loginModal" data-target="#loginModal" style="cursor:pointer;"> Hosting</a>
            </li>
        </ul>
    </nav> -->
    <!-- Sidebar -->

    <!-- Modal dialog -->
    <div class="container">
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
            <div class="modal-dialog modal-default">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3>Login to Hosting Portal - Control Panel</h3>
                    </div>
                    <div class="modal-body">
                        <article class="container-form center-block">
                            <!-- Form Content HERE! -->
                            <form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" action="https://secure.yourwebhosting.com/secureLogin" enctype="application/x-www-form-urlencoded">
                                <fieldset>
                                    <input type='hidden' name='__token_timestamp__' value='1426572610'>
                                    <input type='hidden' name='__token_val__' value='4d96cad055fac46518825357fcb49390'>
                                    <input type="hidden" name="destination" value="http://www.yourwebhosting.com/controlpanel/index.bml">
                                    <!-- Name input-->
                                    <div class="form-group">
                                        <label class="sr-only" for="credential_0">Username: </label>
                                        <div class="col-xs-12">
                                            <input id="credential_0" name="credential_0" type="text" placeholder="Your Username" class="form-control">
                                        </div>
                                    </div>
                                    <!-- Email input-->
                                    <div class="form-group">
                                        <label class="sr-only" for="credential_1">Password: </label>
                                        <div class="col-xs-12">
                                            <input id="email" type="password" name="credential_1" value="" placeholder="Your Password" class="form-control">
                                        </div>
                                    </div>
                                    <!-- Form actions -->
                                    <div class="form-group pull-right">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" name="submit" value="Sign In" class="btn btn-lg">Submit</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </article>
                    </div>
                    <div class="modal-footer">
                        Login Problems?
                        <button type="submit" class="btn btn-dark" data-dismiss="modal" data-href="#collapseTwo" data-toggle="collapse" data-target="#collapseTwo" style="cursor:pointer;">
                            Contact Me
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
    <!-- Modal dialog -->

    <!-- Social media menu component -->
    <!-- <aside id="accordion" class="social text-vertical-center">
        <div class="accordion-social">
            <ul class="panel-collapse collapse in nav nav-stacked" role="tabpanel" aria-labelledby="social-collapse" id="collapseOne">
                <li>
                    <a href="https://www.facebook.com/soldierupdesigns" target="_blank">
                        <i class="fa fa-lg fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/soldierupdesign" target="_blank">
                        <i class="fa fa-lg fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.plus.google.com/+soldierupdesigns" target="_blank">
                        <i class="fa fa-lg fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="https://github.com/blayderunner123" target="_blank">
                        <i class="fa fa-lg fa-github"></i>
                    </a>
                </li>
                <li>
                    <a href="https://linkedin.com/in/blayderunner123" target="_blank">
                        <i class="fa fa-lg fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="skype:live:soldierupdesigns?call">
                        <i class="fa fa-lg fa-skype" target="_blank"></i>
                    </a>
                </li>
                <li>
                    <a href="http://stackexchange.com/users/4992378/blayderunner123" target="_blank">
                        <i class="fa fa-lg fa-stack-exchange"></i>
                    </a>
                </li>
            </ul>
        </div>
    </aside> -->
    <!-- Social media menu component -->

    <!-- <div class="masthead">
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel"> -->

            <!-- Indicators -->
            <!-- <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1"></li>
                <li data-target="#bs-carousel" data-slide-to="2"></li>
            </ol> -->

            <!-- Wrapper for slides -->
            <!-- <div class="carousel-inner">
                <div class="item slides active">
                    <div class="slide-1"></div>
                    <div class="hero">
                        <hgroup>
                            <h1>We are creative</h1>
                            <h3>Get start your next awesome project</h3>
                        </hgroup>
                        <button class="btn btn-hero btn-lg" role="button">See all features</button>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-2"></div>
                    <div class="hero">
                        <hgroup>
                            <h1>We are smart</h1>
                            <h3>Get start your next awesome project</h3>
                        </hgroup>
                        <button class="btn btn-hero btn-lg" role="button">See all features</button>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-3"></div>
                    <div class="hero">
                        <hgroup>
                            <h1>We are amazing</h1>
                            <h3>Get start your next awesome project</h3>
                        </hgroup>
                        <button class="btn btn-hero btn-lg" role="button">See all features</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --><!-- /.masthead -->
    <!-- ============================ HEADER ============================ -->

    <main class="py-4">
        @yield('content')
    </main>
    <!-- </div> -->

    <!-- Footer -->
    <!--/** Fix footer. */ <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation"></div>-->
    <div id="footer" style="margin-top: 15px; padding-top: 10px; background-color: #2E2E2E;">
       <div id="footer-top" class="container-fluid">
            <!-- Location -->
            <div class="col-md-3" style="height: 300px; color: #fff;">
              <h3>Location</h3>
              <p>
                <h4 style="margin: 0px; margin-bottom: 5px; color:#449d44;">โรงพยาบาลมหาราชนครราชสีมา</h4>
                <span style="color:#449d44;">49 ถ.ช้างเผือก ต.ในเมือง อ.เมือง <br>
                จ.นครราชสีมา 30000</span>
              </p>
           </div><!-- /.col -->
           <!-- /.Location -->

           <!-- Contact -->
           <div class="col-md-3" style="height: 300px; color: #fff;">
              <h3>Contact</h3>
              <p style="color:#449d44;">
                <i class="fa fa-phone-square fa-1x"></i> Tel. 0-4423-5000<br>
                <i class="fa fa-fax fa-1x"></i> Fax. 0-4424-6389<br>
                <i class="fa fa-envelope-square fa-1x"></i> E-mail. maharat@mnrh.go.th
              </p>
           </div><!-- /.col -->
           <!-- /.Contact -->

           <!-- Site map -->
           <div class="col-md-3" style="height: 300px; color: #fff;">
              <h3>Site map</h3>
              <p>
                <a href="#" style="color:#449d44;">เกี่ยวกับเรา</a><br>
                <a href="#" style="color:#449d44;">หน่วยงานภายใน</a><br>
                <a href="#" style="color:#449d44;">ข้อมูลการให้บริการ</a><br>
                        <a href="#" style="color:#449d44;">ติดต่อเรา</a><br>
              </p>
           </div><!-- /.col -->
           <!-- /.Site map -->

           <!-- Follow me -->
           <div class="col-md-3" style="height: 300px; color: #fff;">
            <h3>Follow me</h3>
            <!-- Social -->
              <div class="social-container">
                <a href="https://www.facebook.com/Maharat.Korat" target="_blank" style="color:#449d44;">
                    <i id="social" class="fa fa-facebook-square fa-2x social-fb"></i>
                </a>
                  <a href="https://twitter.com/" target="_blank" style="color:#449d44;">
                    <i id="social" class="fa fa-twitter-square fa-2x social-tw"></i>
                  </a>
                  <a href="https://www.youtube.com/user/medmutiTV/" target="_blank" style="color:#449d44;">
                    <i id="social" class="fa fa-youtube-square fa-2x social-gp"></i>
                  </a>
              </div><!-- /.social -->
          </div><!-- /.col -->
          <!-- /.Follow me -->

       </div><!-- /.container -->

       <div id="footer-bottom" class="container-fluid" style="background-color: #000; color: #fff; height: 80px;">
           <div class="col-md-12" style="padding-top: 10px;">
                <p class="text-muted credit">
                    © ลิขสิทธิ์ถูกต้อง 2559 โรงพยาบาลมหาราชนครราชสีมา <br>
                    เวอร์ชั่น 1.0 Create by กลุ่มงานเวชกรรมสังคม<br>
                    รองรับการทำงานบน :
                    <span style="color: #fff; margin: 0px; padding: 0px;">
                        <i class="fa fa-chrome fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-firefox fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-safari-square fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-edge fa-lg" aria-hidden="true"></i>
                    </span>
                </p>
           </div><!-- /.col -->
       </div><!-- /.container -->
    </div><!-- /.footer -->
    <!-- /.Footer -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/run_prettify.min.js"></script>
    <script>
        $(document).ready(function(){
            $("[rel='tooltip']").tooltip();
        });
    </script> -->
</body>
</html>
