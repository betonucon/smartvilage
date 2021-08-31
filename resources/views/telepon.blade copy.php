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
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">PMI Cilegon</a></li>
                    <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Polres Cilegon</a></li>
                    <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">PLN Cilegon</a></li>
                    <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Pemadam Kebakaran</a></li>
                    <li class=""><a href="#tab_5" data-toggle="tab" aria-expanded="false">Bapeda</a></li>
                    <li class=""><a href="#tab_6" data-toggle="tab" aria-expanded="false">DPRD</a></li>
                  </ul>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="tab-content" style="padding:0; background: #fff;">
                      <!-- START TAB 1 -->
                      <div class="tab-pane active" id="tab_1">
                         <div class="panel-group" id="accordion1">
                            <div class="panel panel-default">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a href="#accordion1_1" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed" aria-expanded="false">
                                      PMI Cilegon
                                     </a>
                                  </h4>
                               </div>
                               <div class="panel-collapse collapse in" id="accordion1_1" aria-expanded="false" style="height: 0px;">
                                  <div class="panel-body">
                                     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                               </div>
                            </div>
                            
                         </div>
                      </div>
                      <div class="tab-pane" id="tab_2">
                         <div class="panel-group" id="accordion2">
                            <div class="panel panel-default">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a href="#accordion2_2" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed" aria-expanded="false">
                                     Polres Cilegon
                                     </a>
                                  </h4>
                               </div>
                               <div class="panel-collapse collapse in" id="accordion2_2" aria-expanded="false" style="height: 0px;">
                                  <div class="panel-body">
                                     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                               </div>
                            </div>
                            
                         </div>
                      </div>
                      <div class="tab-pane" id="tab_3">
                         <div class="panel-group" id="accordion3">
                            <div class="panel panel-default">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a href="#accordion3_3" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed" aria-expanded="false">
                                      PLN Cilegon
                                     </a>
                                  </h4>
                               </div>
                               <div class="panel-collapse collapse in" id="accordion3_3" aria-expanded="false" style="height: 0px;">
                                  <div class="panel-body">
                                     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                               </div>
                            </div>
                            
                         </div>
                      </div>
                      <div class="tab-pane" id="tab_4">
                         <div class="panel-group" id="accordion4">
                            <div class="panel panel-default">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a href="#accordion4_4" data-parent="#accordion4" data-toggle="collapse" class="accordion-toggle collapsed" aria-expanded="false">
                                     Pemadam Kebakaran
                                     </a>
                                  </h4>
                               </div>
                               <div class="panel-collapse collapse in" id="accordion4_4" aria-expanded="false" style="height: 0px;">
                                  <div class="panel-body">
                                     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                               </div>
                            </div>
                            
                         </div>
                      </div>
                      <div class="tab-pane" id="tab_5">
                         <div class="panel-group" id="accordion5">
                            <div class="panel panel-default">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a href="#accordion5_5" data-parent="#accordion5" data-toggle="collapse" class="accordion-toggle collapsed" aria-expanded="false">
                                      Bapeda
                                     </a>
                                  </h4>
                               </div>
                               <div class="panel-collapse collapse in" id="accordion5_5" aria-expanded="false" style="height: 0px;">
                                  <div class="panel-body">
                                     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                               </div>
                            </div>
                            
                         </div>
                      </div>
                      <div class="tab-pane" id="tab_6">
                         <div class="panel-group" id="accordion6">
                            <div class="panel panel-default">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a href="#accordion6_6" data-parent="#accordion6" data-toggle="collapse" class="accordion-toggle collapsed" aria-expanded="false">
                                     DPRD
                                     </a>
                                  </h4>
                               </div>
                               <div class="panel-collapse collapse in" id="accordion6_6" aria-expanded="false" style="height: 0px;">
                                  <div class="panel-body">
                                     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
