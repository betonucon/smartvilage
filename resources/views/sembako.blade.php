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
                  <h2>Informasi Rata-Rata Harga Pangan Kota Cilegon</h2>                
                  <div id="myCarousel1" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                      <div class="active item">
                        <blockquote><p>Harga Pangan Kota Cilegon - Banten</p></blockquote>
                        <div class="carousel-info">
                          <img class="pull-left" src="{{url('icon/cctv.png')}}" alt="">
                          <div class="pull-left">
                            <span class="testimonials-name">Kota Cilegon</span>
                            <span class="testimonials-post">Harga Pangan</span>
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
              <div class="row margin-bottom-40">
                @foreach(get_sembako() as $get_sembako)
                <div class="col-md-3">
                  <div class="pricing hover-effect">
                    <div class="pricing-head">
                      <h3>{{$get_sembako['nama']}}
                      <!-- <span>
                         Officia deserunt mollitia
                      </span> -->
                      </h3>
                      <h4><i>Rp</i><i>.{{uang($get_sembako['hargabaru'])}}</i>
                      <span>
                         Per {{$get_sembako['satuan']}}
                      </span>
                      </h4>
                    </div>
                    <ul class="pricing-content list-unstyled">
                     
                      <li>
                         {!!cek_kondisi($get_sembako['hargabaru'],$get_sembako['hargalama'])!!}
                      </li>
                    </ul>
                    <!-- <div class="pricing-footer">
                      <p>
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
                      </p>
                      <a href="javascript:;" class="btn btn-primary">
                         Sign Up <i class="m-icon-swapright m-icon-white"></i>
                      </a>
                    </div> -->
                  </div>
                </div>
                @endforeach
                <!--//End Pricing -->
              </div>
            </div>
          </div>
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
