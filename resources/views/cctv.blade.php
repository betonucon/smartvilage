@extends('layouts.web')

@push('style')
<link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
      <script src="https://unpkg.com/video.js/dist/video.js"></script>
      <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
@endpush
@section('content')

    <div class="main">
      <div class="container">
      <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <div class="content-page">
              
              <div class="row margin-bottom-40">
                <!-- BEGIN TESTIMONIALS -->
                <div class="col-md-12 testimonials-v1">
                  <h2>CCTV Kota Cilegon</h2>                
                  <div id="myCarousel1" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                      <div class="active item">
                        <blockquote><p>Kamera Pengawas Kota Cilegon - Banten</p></blockquote>
                        <div class="carousel-info">
                          <img class="pull-left" src="{{url('icon/cctv.png')}}" alt="">
                          <div class="pull-left">
                            <span class="testimonials-name">Kota Cilegon</span>
                            <span class="testimonials-post">Pengawasan Area</span>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <!-- Carousel nav -->
                    <!-- <a class="left-btn" href="#myCarousel1" data-slide="prev"></a>
                    <a class="right-btn" href="#myCarousel1" data-slide="next"></a> -->
                  </div>
                </div>
                <!-- END TESTIMONIALS --> 

                
              </div>

              <div class="row front-team">
                <ul class="list-unstyled">
                  @foreach(get_cctv() as $get_cctv)
                    <li class="col-md-4">
                      <div class="thumbnail">
                          <video id="my_video_1" class="video-js vjs-fluid vjs-default-skin" controls preload="auto"
                          data-setup='{}'>
                            <source src="{{$get_cctv['url']}}" type="application/x-mpegURL">
                          </video>
                                  <h3>
                          <strong>{{$get_cctv['locname']}}</strong> 
                          <small>{{$get_cctv['loc']}}</small>
                        </h3>
                        
                      </div>
                    </li>
                  @endforeach
                </ul>            
              </div>

            </div>
          </div>
          <!-- END CONTENT -->
        </div>
      </div>
    </div>
@endsection
@push('ajax')

<script>
    var player = videojs('my_video_1');
    player.play();
</script>
@endpush
