@extends('landingpage.layouts.main')
@section('konten')
    <div class="hero common-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1>All Movies</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="#">Home</a></li>
                            <li> <span class="ion-ios-arrow-right"></span> movie listing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="title-hd">
                        <h2>Genres Filter</h2>
                    </div>

                    <div class="tabs">
                        <ul class="tab-links-2">
                            <li class="active"><a href="#tab21-h2">#All</a></li>
                            @foreach ($genres as $item)
                                <li><a href="#tab{{ $item->id }}"> #{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                        <br>
                        <div class="tab-content ">
                            <div id="tab21-h2" class="tab active">
                                <div class="row">
                                        <div class="flex-wrap-movielist justify-content-center mv-grid-fw" style="margin-left: 30px">
                                            @foreach ($movies as $item)
                                                <div class="movie-item-style-2 movie-item-style-1">
                                                    <img src="{{ $item->poster }}" style="height: 250px" alt="">
                                                    <div class="hvr-inner">
                                                        <a href="/movies/{{ $item->id }}"> Read more <i
                                                                class="ion-android-arrow-dropright"></i>
                                                        </a>
                                                    </div>
                                                    <div class="mv-item-infor">
                                                        <h6><a href="/movies/{{ $item->id }}">{{ $item->title }}</a>
                                                        </h6>
                                                        <p class="rate"><i
                                                                class="ion-android-star"></i><span>{{ $item->rating }}</span>
                                                            /10
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                </div>
                            </div>
                            @foreach ($genres as $genre)
                                <div id="tab{{$genre->id}}" class="tab">
                                    <div class="row">
                                        <div class="flex-wrap-movielist mv-grid-fw">
                                            @foreach ($genre->movies as $item)
                                                <div class="movie-item-style-2 movie-item-style-1">
                                                    <img src="{{ $item->poster }}" style="height: 250px" alt="">
                                                    <div class="hvr-inner">
                                                        <a href="/movies/{{ $item->id }}"> Read more <i
                                                                class="ion-android-arrow-dropright"></i>
                                                        </a>
                                                    </div>
                                                    <div class="mv-item-infor">
                                                        <h6><a href="/movies/{{ $item->id }}">{{ $item->title }}</a>
                                                        </h6>
                                                        <p class="rate"><i
                                                                class="ion-android-star"></i><span>{{ $item->rating }}</span>
                                                            /10
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
