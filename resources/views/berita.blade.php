    @push('style')
    
        <style>
            @media only screen and (min-width: 600px) {
                .img-berita{
                    width: 100%;
                    height: 132px !important;
                }
                .thumbnail {
                    height:336px !important;
                }

            }
            @media only screen and (max-width: 590px) {

            }
            
        </style>
    @endpush
            <h1>Newssssss</h1>
            <div class="row front-team">
                <ul class="list-unstyled">
                    @foreach(get_berita() as $get_berita)
                        <li class="col-md-3">
                            <div class="thumbnail">
                            <img alt="" src="{{$get_berita['urlToImage']}}" class="img-berita" >
                            <h3>
                                <strong>{{$get_berita['source']}}</strong> 
                                <small>{{$get_berita['publishedAt']}}</small>
                            </h3>
                            <p>{{$get_berita['description']}}</p>
                            <ul class="social-icons social-icons-color">
                                <li><a class="facebook" data-original-title="Facebook" href="javascript:;"></a></li>
                                <li><a class="twitter" data-original-title="Twitter" href="javascript:;"></a></li>
                                <li><a class="googleplus" data-original-title="Goole Plus" href="javascript:;"></a></li>
                                <li><a class="linkedin" data-original-title="Linkedin" href="javascript:;"></a></li>
                            </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>            
            </div>

           