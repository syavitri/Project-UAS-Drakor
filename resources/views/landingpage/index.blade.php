@extends('landingpage.layouts.main')
@section('konten')
    <div class="slider sliderv2">
        <div class="container">
            <div class="row">
                <div class="slider-single-item">
                    @foreach ($movieterpopuler as $movie)
                        <div class="movie-item">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-xs-12">
                                    <div class="title-in">
                                        <div class="cate">
                                            <span class="blue"><a href="/genres/{{$movie->genres->id}}">{{$movie->genres->name}}</a></span>
                                        </div>
                                        <h1><a href="#">{{$movie->title}}<br><span>{{$movie->release_date}}</span></a></h1>
                                        <div class="social-btn">
                                            <a href="#" class="parent-btn"><i class="ion-heart"></i> Add to
                                                Favorite</a>
                                            <div class="hover-bnt">
                                                <a href="#" class="parent-btn"><i
                                                        class="ion-android-share-alt"></i>share</a>
                                                <div class="hvr-item">
                                                    <a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
                                                    <a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
                                                    <a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
                                                    <a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mv-details">
                                            <p><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /10</p>
                                        </div>
                                        <div class="btn-transform transform-vertical">
                                            <div><a href="{{url('/movies/'. $movie->id)}}" class="item item-1 redbtn">more detail</a></div>
                                            <div><a href="{{url('/movies/'. $movie->id)}}" class="item item-2 redbtn hvrbtn">more detail</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="mv-img-2">
                                        <a href="{{url('/movies/'. $movie->id)}}"><img src="{{$movie->poster}}" alt="{{$movie->title}}" style="height:350px"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="movie-items  full-width">
        <div class="row">
            <div class="col-md-12">
                @foreach ($genres as $genre)
                    <div class="title-hd">
                        <h2>{{ $genre->name }}</h2>
                        <a href="{{ url('/movies') }}" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                    </div>
                    <div class="tabs">
                        <div class="tab-content">
                            <div id="tab1-h2" class="tab active">
                                <div class="row">
                                    <div class="slick-multiItem2">
                                        @foreach ($genre->movies as $movie)
                                            <div class="slide-it">
                                                <div class="movie-item">
                                                    <div class="mv-img">
                                                        <img src="{{$movie->poster}}" style="height: 250px" alt="" >
                                                    </div>
                                                    <div class="hvr-inner">
                                                        <a href="{{url('movies', $movie->id)}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                    </div>
                                                    <div class="title-in">
                                                        <h6><a href="{{url('movies', $movie->id)}}">{{ $movie->title }}</a></h6>
                                                        <p><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /10</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="trailers full-width">
        <div class="row ipad-width">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="title-hd">
                    <h2>in theater</h2>
                    <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                </div>
                <div class="videos">
                    <div class="slider-for-2 video-ft">
                        <div>
                            <iframe class="item-video" src="https://www.youtube.com/embed/1Q8fG0TtVAY"
                                data-src="https://www.youtube.com/embed/1Q8fG0TtVAY"></iframe>
                        </div>
                        <div>
                            <iframe class="item-video" src="https://www.youtube.com/embed/w0qQkSuWOS8"
                                data-src="https://www.youtube.com/embed/w0qQkSuWOS8"></iframe>
                        </div>
                        <div>
                            <iframe class="item-video" src="https://www.youtube.com/embed/44LdLqgOpjo"
                                data-src="https://www.youtube.com/embed/44LdLqgOpjo"></iframe>
                        </div>
                        <div>
                            <iframe class="item-video" src="https://www.youtube.com/embed/gbug3zTm3Ws"
                                data-src="https://www.youtube.com/embed/gbug3zTm3Ws"></iframe>
                        </div>
                        <div>
                            <iframe class="item-video" src="https://www.youtube.com/embed/e3Nl_TCQXuw"
                                data-src="https://www.youtube.com/embed/e3Nl_TCQXuw"></iframe>
                        </div>
                        <div>
                            <iframe class="item-video" src="https://www.youtube.com/embed/NxhEZG0k9_w"
                                data-src="https://www.youtube.com/embed/NxhEZG0k9_w"></iframe>
                        </div>

                    </div>
                    <div class="slider-nav-2 thumb-ft">
                        <div class="item">
                            <div class="trailer-img">
                                <img src="{{ asset('landing_asset/images/uploads/trailer7.jpg') }}"
                                    alt="photo by Barn Images" width="4096" height="2737">
                            </div>
                            <div class="trailer-infor">
                                <h4 class="desc">Wonder Woman</h4>
                                <p>2:30</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="trailer-img">
                                <img src="{{ asset('landing_asset/images/uploads/trailer2.jpg') }}"
                                    alt="photo by Barn Images" width="350" height="200">
                            </div>
                            <div class="trailer-infor">
                                <h4 class="desc">Oblivion: Official Teaser Trailer</h4>
                                <p>2:37</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="trailer-img">
                                <img src="{{ asset('landing_asset/images/uploads/trailer6.jpg') }}"
                                    alt="photo by Joshua Earle" width="509" height="301">
                            </div>
                            <div class="trailer-infor">
                                <h4 class="desc">Exclusive Interview: Skull Island</h4>
                                <p>2:44</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="trailer-img">
                                <img src="{{ asset('landing_asset/images/uploads/trailer3.png') }}"
                                    alt="photo by Alexander Dimitrov" width="100" height="56">
                            </div>
                            <div class="trailer-infor">
                                <h4 class="desc">Logan: Director James Mangold Interview</h4>
                                <p>2:43</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="trailer-img">
                                <img src="{{ asset('landing_asset/images/uploads/trailer4.png') }}"
                                    alt="photo by Wojciech Szaturski" width="100" height="56">
                            </div>
                            <div class="trailer-infor">
                                <h4 class="desc">Beauty and the Beast: Official Teaser Trailer 2</h4>
                                <p>2: 32</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="trailer-img">
                                <img src="{{ asset('landing_asset/images/uploads/trailer5.jpg') }}"
                                    alt="photo by Wojciech Szaturski" width="360" height="189">
                            </div>
                            <div class="trailer-infor">
                                <h4 class="desc">Fast&Furious 8</h4>
                                <p>3:11</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="celebrities">
                        <h4 class="sb-title">Spotlight Celebrities</h4>
                        <div class="celeb-item">
                            <a href="#"><img src="{{ asset('landing_asset/images/uploads/ava1.jpg') }}"
                                    alt="" width="70" height="70"></a>
                            <div class="celeb-author">
                                <h6><a href="#">Samuel N. Jack</a></h6>
                                <span>Actor</span>
                            </div>
                        </div>
                        <div class="celeb-item">
                            <a href="#"><img src="{{ asset('landing_asset/images/uploads/ava2.jpg') }}"
                                    alt="" width="70" height="70"></a>
                            <div class="celeb-author">
                                <h6><a href="#">Benjamin Carroll</a></h6>
                                <span>Actor</span>
                            </div>
                        </div>
                        <div class="celeb-item">
                            <a href="#"><img src="{{ asset('landing_asset/images/uploads/ava3.jpg') }}"
                                    alt="" width="70" height="70"></a>
                            <div class="celeb-author">
                                <h6><a href="#">Beverly Griffin</a></h6>
                                <span>Actor</span>
                            </div>
                        </div>
                        <div class="celeb-item">
                            <a href="#"><img src="{{ asset('landing_asset/images/uploads/ava4.jpg') }}"
                                    alt="" width="70" height="70"></a>
                            <div class="celeb-author">
                                <h6><a href="#">Justin Weaver</a></h6>
                                <span>Actor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- latest new v2 section-->
    <div class="latestnew full-width">
        <div class="row">
            <div class="col-md-12">
                <div class="title-hd">
                    <h2>Latest news</h2>
                    <a href="#" class="viewall">see all news <i class="ion-ios-arrow-right"></i></a>
                </div>
                <div class="latestnewv2">
                    <div class="blog-item-style-2">
                        <a href=""><img src="{{ asset('landing_asset/images/uploads/blogv21.jpg') }}"
                                alt=""></a>
                        <div class="blog-it-infor">
                            <h3><a href="">Godzilla: King Of The Monsters Adds O’Shea Jackson Jr</a>
                            </h3>
                            <span class="time">27 Mar 2017</span>
                            <p>Looks like Kong: Skull Island started a tradition with its casting of Straight ...</p>
                        </div>
                    </div>
                    <div class="blog-item-style-2">
                        <a href=""><img src="{{ asset('landing_asset/images/uploads/blogv22.jpg') }}"
                                alt=""></a>
                        <div class="blog-it-infor">
                            <h3><a href="">First Official Images of Alicia Vikander As Tomb Raider’s
                                    Lara Croft</a></h3>
                            <span class="time">27 Mar 2017</span>
                            <p>Aside from the her digital incarnation, the most recognisable image of Tomb ...</p>
                        </div>
                    </div>
                    <div class="blog-item-style-2">
                        <a href=""><img src="{{ asset('landing_asset/images/uploads/blogv23.jpg') }}"
                                alt=""></a>
                        <div class="blog-it-infor">
                            <h3><a href="">New Spider-Man: Homecoming Poster Finds Peter Parker At
                                    Rest</a></h3>
                            <span class="time">27 Mar 2017</span>
                            <p>He might be a primary protector of New York City, but at heart, Peter Parker is ...</p>
                        </div>
                    </div>
                    <div class="blog-item-style-2">
                        <a href=""><img src="{{ asset('landing_asset/images/uploads/blogv24.jpg') }}"
                                alt=""></a>
                        <div class="blog-it-infor">
                            <h3><a href="">Joseph Gordon-Levitt Directing Moive Musical Comedy
                                    Wingmen</a></h3>
                            <span class="time">27 Mar 2017</span>
                            <p>A little over a year ago, we learned that Joseph Gordon-Levitt and Channing ...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
