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
            <h1>Nomor Telepon Penting</h1>
            <div class="content-page">
              <div class="row">
                <div class="col-md-3 col-sm-3">
                  <ul class="tabbable faq-tabbable">
                    @foreach(get_nomorpenting() as $get_nomorpenting)
                    <li class="@if($get_nomorpenting['id']==1) active @endif"><a href="#tab_{{$get_nomorpenting['id']}}" data-toggle="tab" aria-expanded="true">{{$get_nomorpenting['nama']}}</a></li>
                    @endforeach
                  </ul>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="tab-content" style="padding:0; background: #fff;">
                      <!-- START TAB 1 -->
                      @foreach(get_nomorpenting() as $get_nomorpenting)
                      <div class="tab-pane @if($get_nomorpenting['id']==1) active @endif" id="tab_{{$get_nomorpenting['id']}}">
                         <div class="panel-group" id="accordion{{$get_nomorpenting['id']}}">
                            <div class="panel panel-default">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a href="#accordion{{$get_nomorpenting['id']}}_{{$get_nomorpenting['id']}}" data-parent="#accordion{{$get_nomorpenting['id']}}" data-toggle="collapse" class="accordion-toggle collapsed" aria-expanded="false">
                                     {{$get_nomorpenting['nama']}}
                                     </a>
                                  </h4>
                               </div>
                               <div class="panel-collapse collapse in" id="accordion{{$get_nomorpenting['id']}}_{{$get_nomorpenting['id']}}" aria-expanded="false" style="height: 0px;">
                                  <div class="panel-body" style="background: #fafafb;border: dotted 3px #72a91f;border-top: solid 1px #d0f598;">
                                    <h3 class="padding-top-10">Call Center {{$get_nomorpenting['nama']}}</h3>
                                    <address>
                                      <strong>{{$get_nomorpenting['wilayah']}}.</strong><br>
                                      795 Park Ave, Suite 120<br>
                                      San Francisco, CA 94107<br>
                                      <i class="fa fa-phone"></i> {{$get_nomorpenting['nomortelpon']}}
                                    </address>
                                  </div>
                               </div>
                            </div>
                            
                         </div>
                      </div>
                      @endforeach 
                    </div>
                </div>
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
