<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->

<!-- Mirrored from technext.github.io/Metronic-Frontend/theme/index-header-fix.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 04:54:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <title>SMART VILAGE</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"> -->
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="{{url('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="{{url('assets/pages/css/animate.css')}}" rel="stylesheet">
  <link href="{{url('assets/plugins/fancybox/source/jquery.fancybox.css')}}" rel="stylesheet">
  <link href="{{url('assets/plugins/owl.carousel/assets/owl.carousel.css')}}" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="{{url('assets/pages/css/components.css')}}" rel="stylesheet">
  <link href="{{url('assets/pages/css/slider.css')}}" rel="stylesheet">
  <link href="{{url('assets/corporate/css/style.css')}}" rel="stylesheet">
  <link href="{{url('assets/corporate/css/style-responsive.css')}}" rel="stylesheet">
  <link href="{{url('assets/corporate/css/themes/red.css')}}" rel="stylesheet" id="style-color">
  <link href="{{url('assets/corporate/css/custom.css')}}" rel="stylesheet">
  <!-- Theme styles END -->
  <style>
        .carousel-slider .carousel-position-six {
            position: absolute;
            top: inherit !important;
            bottom: 10% !important;
            left: auto;
        }
        .carousel-slider .carousel-subtitle-v5 {
            display: block;
            font-size: 18px;
            font-weight: 200;
            line-height: 1.4;
            color: #fff;
            background: #07070a85;
        }
        .notifikasi-form{
            color:red;
        }
        .form-group {
            margin-bottom: 1%;
        }
        .border-top-bottom {
            border-top: 3px solid #c7f1a1;
            border-bottom: 3px solid #c7f1a1;
            padding: 3px 0;
        }
        .btn-secondary {
            background: #efeffb !important;
            border: solid 1px #f58b8b;
            border-radius: 5px !important;
        }
        .btn-primary {
            background: #5858ef !important;
            border: solid 1px #f58b8b;
            border-radius: 5px !important;
        }
        .notifnya{
            background: #fb0000ad;
            padding: 1%;
            color: #fff;
            margin-bottom:2%;
        }
        .loadnya {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1070;
            top: 0;
            left: 0;
            background-color: rgb(0,0,0);
            background-color: rgb(0 0 0 / 55%);
            overflow-x: hidden;
            transition: transform .9s;
        }

        .loadnya-content {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
            color:#fff;
            font-size:20px;
        }
        @media only screen and (min-width: 600px) {
            .header-navigation {
                font: 13px "Open Sans", sans-serif !important;
            }
            #registermodal{
              width:35%;
            }
            #modalpin{
              background: #e8e8ec85;
            }

        }
        @media only screen and (max-width: 590px) {

        }
  </style>
  @stack('style')
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
    <div id="loadnya" class="loadnya">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="loadnya-content">
            <img src="{{url('icon/loading.gif')}}" style="width: 10%;">
        </div>
    </div>
    <input type="hidden" id="tokennya" value="{{ csrf_token() }}" />
    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="color-panel hidden-sm">
      <div class="color-mode-icons icon-color"></div>
      <div class="color-mode-icons icon-color-close"></div>
      <div class="color-mode">
        <p>THEME COLOR</p>
        <ul class="inline">
          <li class="color-red current color-default" data-style="red"></li>
          <li class="color-blue" data-style="blue"></li>
          <li class="color-green" data-style="green"></li>
          <li class="color-orange" data-style="orange"></li>
          <li class="color-gray" data-style="gray"></li>
          <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
      </div>
    </div>
    <!-- END BEGIN STYLE CUSTOMIZER --> 

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>info@keenthemes.com {{Auth::user()['name']}}</span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                      @guest
                        <li><a href="{{ route('login') }}">Log In</a></li>
                        <li><a href="{{ route('register') }}">Registration</a></li>
                      @else

                      @endguest
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="index-2.html"><img src="{{url('icon/logo.png')}}" alt="Metronic FrontEnd"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
            @include('layouts.side')
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

    <!-- BEGIN SLIDER -->
    @yield('slider')
    <!-- END SLIDER -->

    @yield('content')
    @include('layouts.modal')   
    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.</p>

            <div class="photo-stream">
              <h2>Photos Stream</h2>
              <ul class="list-unstyled">
                <li><a href="javascript:;"><img alt="" src="assets/pages/img/people/img5-small.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/pages/img/works/img1.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/pages/img/people/img4-large.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/pages/img/works/img6.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/pages/img/works/img3.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/pages/img/people/img2-large.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/pages/img/works/img2.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/pages/img/works/img5.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/pages/img/people/img5-small.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/pages/img/works/img1.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/pages/img/people/img4-large.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/pages/img/works/img6.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/pages/img/works/img3.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/pages/img/people/img2-large.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/pages/img/works/img2.jpg"></a></li>
              </ul>                    
            </div>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
              35, Lorem Lis Street, Park Ave<br>
              California, US<br>
              Phone: 300 323 3456<br>
              Fax: 300 323 1456<br>
              Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
              Skype: <a href="skype:metronic">metronic</a>
            </address>

            <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
              <h2>Newsletter</h2>
              <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
              <form action="#">
                <div class="input-group">
                  <input type="text" placeholder="youremail@mail.com" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2 class="margin-bottom-0">Latest Tweets</h2>
            <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>
          </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-4 col-sm-4 padding-top-10">
            2015 © Keenthemes. ALL Rights Reserved. <a href="javascript:;">Privacy Policy</a> | <a href="javascript:;">Terms of Service</a>
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-4 col-sm-4">
            <ul class="social-footer list-unstyled list-inline pull-right">
              <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-skype"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-github"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-youtube"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-dropbox"></i></a></li>
            </ul>  
          </div>
          <!-- END PAYMENTS -->
          <!-- BEGIN POWERED -->
          <div class="col-md-4 col-sm-4 text-right">
            <p class="powered">Powered by: <a href="http://www.keenthemes.com/">KeenThemes.com</a></p>
          </div>
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>
    <![endif]-->
    <script src="{{url('assets/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>      
    <script src="{{url('assets/corporate/scripts/back-to-top.js')}}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{url('assets/plugins/fancybox/source/jquery.fancybox.pack.js')}}" type="text/javascript"></script><!-- pop up -->
    <script src="{{url('assets/plugins/owl.carousel/owl.carousel.min.js')}}" type="text/javascript"></script><!-- slider for products -->

    <script src="{{url('assets/corporate/scripts/layout.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/pages/scripts/bs-carousel.js')}}" type="text/javascript"></script>
    
    <script type="text/javascript">
        @if(Auth::user()['id']>0)
          @if(Auth::user()['pin']=='0')
            $('#modalpin').modal({backdrop: 'static', keyboard: false});
          @endif
        @endif
        jQuery(document).ready(function() {
            $('#notif-register').hide();
            $('#notlogin').hide();
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            Layout.initNavScrolling();
        });
        
    </script>
    @include('layouts.ajax')
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->

<!-- Mirrored from technext.github.io/Metronic-Frontend/theme/index-header-fix.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 04:54:41 GMT -->
</html>