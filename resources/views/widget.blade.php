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
            <div class="col-md-9 col-sm-9">
               <h2>Widget</h2>
               <div class="content-page">
               <!-- BEGIN CAROUSEL -->            
               <div class="front-carousel margin-bottom-20">
                  <div id="myCarousel" class="carousel slide">
                     <!-- Carousel items -->
                     <div class="carousel-inner">
                     <div class="item active">
                        <img src="assets/pages/img/posts/img1.jpg" alt="">
                     </div>
                     <div class="item">
                     <img src="assets/pages/img/posts/img3.jpg" alt="">
                     </div>
                  </div>
                  <!-- Carousel nav -->
                  <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                     <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control right" href="#myCarousel" data-slide="next">
                     <i class="fa fa-angle-right"></i>
                  </a>
               </div>                
               </div>
               <!-- END CAROUSEL --> 

               
                                    
               </div>
            </div>

            <div class="col-md-3 col-sm-3 sidebar2">
               <h2 class="padding-top-30">Our Contacts</h2>
               <address>
               <strong>Loop, Inc.</strong><br>
               795 Park Ave, Suite 120<br>
               San Francisco, CA 94107<br>
               <abbr title="Phone">P:</abbr> (234) 145-1810
               </address>
               <address>
               <strong>Email</strong><br>
               <a href="mailto:info@email.com">info@email.com</a><br>
               <a href="mailto:support@example.com">support@example.com</a>
               </address>

               <h2 class="padding-top-20">Contact Form</h2>
               <!-- BEGIN FORM-->
               <form action="#" role="form">
               <div class="form-group">
                  <label for="career-name">Name</label>
                  <input type="text" class="form-control" id="career-name">
               </div>
               <div class="form-group">
                  <label for="career-position">Position</label>
                  <select class="form-control" id="career-position">
                     <option>Senior Software Engineer</option>
                     <option>Systems Administrator/Operations Engineer</option>
                     <option>Technical Support Engineer</option>
                  </select>
               </div>
               <div class="form-group">
                  <label for="career-resume">Resume</label>
                  <input type="file" id="career-resume">
               </div>
               <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Send</button>
               </form>
               <!-- END FORM-->                                     
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
