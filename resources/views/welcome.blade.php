@extends('layouts.web')

@section('slider')
    @include('layouts.slider')
@endsection
@section('content')
<div class="main">
      <div class="container">
        <!-- BEGIN TABS AND TESTIMONIALS -->
        
        <div class="row mix-block margin-bottom-40">
          <!-- TABS -->
          <div class="col-md-8 tab-style-1">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-1" data-toggle="tab">Multipurpose</a></li>
              <li><a href="#tab-2" data-toggle="tab">Documented</a></li>
              <li><a href="#tab-3" data-toggle="tab">Responsive</a></li>
              <li><a href="#tab-4" data-toggle="tab">Clean & Fresh</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane row fade in active" id="tab-1">
                <div class="col-md-3 col-sm-3">
                  <a href="assets/temp/photos/img7.html" class="fancybox-button" title="Image Title" data-rel="fancybox-button">
                    <img class="img-responsive" src="assets/pages/img/photos/img7.html" alt="">
                  </a>
                </div>
                <div class="col-md-9 col-sm-9">
                  <p class="margin-bottom-10">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p>
                  <p><a class="more" href="javascript:;">Read more <i class="icon-angle-right"></i></a></p>
                </div>
              </div>
              <div class="tab-pane row fade" id="tab-2">
                <div class="col-md-9 col-sm-9">
                  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia..</p>
                </div>
                <div class="col-md-3 col-sm-3">
                  <a href="assets/temp/photos/img10.html" class="fancybox-button" title="Image Title" data-rel="fancybox-button">
                    <img class="img-responsive" src="assets/pages/img/photos/img10.html" alt="">
                  </a>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-3">
                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
              </div>
              <div class="tab-pane fade" id="tab-4">
                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
              </div>
            </div>
          </div>
          <!-- END TABS -->
        
          <!-- TESTIMONIALS -->
          <div class="col-md-4 testimonials-v1">
            
            <div id="wwo-weather-widget-3"></div><script type='text/javascript' src='https://www.worldweatheronline.com/widget/v5/weather-widget.ashx?loc=3041160&wid=3&tu=1&div=wwo-weather-widget-3' async></script><noscript><a href="https://www.worldweatheronline.com/cilegon-weather/west-java/id.aspx" alt="Hour by hour Cilegon, West Java weather">Cilegon, West Java weather forecast hourly</a></noscript>

          </div>
          <!-- END TESTIMONIALS -->
        </div>                
        <!-- END TABS AND TESTIMONIALS -->
        <!-- BEGIN SERVICE BOX -->   
        <div class="row service-box margin-bottom-40">
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-location-arrow blue"></i></em>
              <span>Multipurpose Template</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-check red"></i></em>
              <span>Well Documented</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-compress green"></i></em>
              <span>Responsive Design</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
        </div>
        <!-- END SERVICE BOX -->

        <!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class="row quote-v1 margin-bottom-30">
          <div class="col-md-9">
            <span>Metronic - The Most Complete &amp; Popular Admin &amp; Frontend Theme</span>
          </div>
          <div class="col-md-3 text-right">
            <a class="btn-transparent" href="http://www.keenthemes.com/preview/index.php?theme=metronic_admin" target="_blank"><i class="fa fa-rocket margin-right-10"></i>Preview Admin</a>
          </div>
        </div>
        <!-- END BLOCKQUOTE BLOCK -->

        <!-- BEGIN RECENT WORKS -->
        <div class="row recent-work margin-bottom-40">
          <div class="col-md-3">
            <h2><a href="portfolio.html">Recent Works</a></h2>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde voluptatem. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div class="col-md-9">
            <div class="owl-carousel owl-carousel3">
              <div class="recent-work-item">
                <em>
                  <img src="assets/pages/img/works/img1.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="assets/pages/img/works/img1.jpg" class="fancybox-button" title="Project Name #1" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Amazing Projectsss</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="assets/pages/img/works/img3.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="assets/pages/img/works/img1.jpg" class="fancybox-button" title="Project Name #1" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Amazing Projectaaa</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="assets/pages/img/works/img2.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="assets/pages/img/works/img2.jpg" class="fancybox-button" title="Project Name #2" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Amazing Project</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
              
            </div>       
          </div>
        </div> 
        @include('berita')  
        <!-- END RECENT WORKS -->

        

        
        <!-- BEGIN CLIENTS -->
        <!-- <div class="row margin-bottom-40 our-clients">
          <div class="col-md-3">
            <h2><a href="javascript:;">Our Clients</a></h2>
            <p>Lorem dipsum folor margade sitede lametep eiusmod psumquis dolore.</p>
          </div>
          <div class="col-md-9">
            <div class="owl-carousel owl-carousel6-brands">
              <div class="client-item">
                <a href="javascript:;">
                  <img src="assets/pages/img/clients/client_1_gray.png" class="img-responsive" alt="">
                  <img src="assets/pages/img/clients/client_1.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="assets/pages/img/clients/client_2_gray.png" class="img-responsive" alt="">
                  <img src="assets/pages/img/clients/client_2.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="assets/pages/img/clients/client_3_gray.png" class="img-responsive" alt="">
                  <img src="assets/pages/img/clients/client_3.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="assets/pages/img/clients/client_4_gray.png" class="img-responsive" alt="">
                  <img src="assets/pages/img/clients/client_4.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="assets/pages/img/clients/client_5_gray.png" class="img-responsive" alt="">
                  <img src="assets/pages/img/clients/client_5.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="assets/pages/img/clients/client_6_gray.png" class="img-responsive" alt="">
                  <img src="assets/pages/img/clients/client_6.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="assets/pages/img/clients/client_7_gray.png" class="img-responsive" alt="">
                  <img src="assets/pages/img/clients/client_7.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="assets/pages/img/clients/client_8_gray.png" class="img-responsive" alt="">
                  <img src="assets/pages/img/clients/client_8.png" class="color-img img-responsive" alt="">
                </a>
              </div>                  
            </div>
          </div>          
        </div> -->
        <!-- END CLIENTS -->
      </div>
    </div>
@endsection
