@extends('landingpage.layouts.main')
@section('konten')
    <div class="hero mv-single-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <h1> movie listing - list</h1>
                                                                            <ul class="breadcumb">
                                                                             <li class="active"><a href="#">Home</a></li>
                                                                             <li> <span class="ion-ios-arrow-right"></span> movie listing</li>
                                                                            </ul> -->
                </div>
            </div>
        </div>
    </div>
    <div class="page-single movie-single movie_single">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="movie-img sticky-sb">
                        <img src="{{ $movie->poster }}" alt="">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="movie-single-ct main-content">
                        <h1 class="bd-hd">{{ $movie->title }} <span>{{ $movie->release_date }}</span></h1>
                        <div class="social-btn">
                            <a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
                            <div class="hover-bnt">
                                <a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
                                <div class="hvr-item">
                                    <a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
                                    <a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
                                    <a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
                                    <a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-rate">
                            <div class="rate">
                                <i class="ion-android-star"></i>
                                <p><span>{{ $movie->rating }}</span> /10<br>
                                </p>
                            </div>
                            <div class="rate-star">
                                <p>Rate This Movie: </p>
                                @php
                                    $rating = $movie->rating;
                                @endphp

                                @for ($i = 1; $i <= 10; $i++)
                                    @if ($rating >= $i)
                                        <i class="ion-ios-star"></i>
                                    @else
                                        <i class="ion-ios-star-outline"></i>
                                    @endif
                                @endfor

                            </div>
                        </div>
                        <div class="movie-tabs">
                            <div class="tabs">
                                <ul class="tab-links tabs-mv">
                                    <li class="active"><a href="#overview">Overview</a></li>
                                    <li><a href="#reviews"> Reviews</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="overview" class="tab active">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="title-hd-sm">
                                                    <h4>Synopsis Movie</h4>
                                                </div>
                                                <div class="mv-user-review-item">
                                                    <pre style="color: rgb(250, 250, 250)">{{ $movie->synopsis }}</pre>
                                                </div>
                                                @if (!is_null($review))
                                                    <div class="title-hd-sm">
                                                        <h4>Reviews Movie</h4>
                                                    </div>
                                                    <div class="mv-user-review-item">
                                                        <div class="user-infor">
                                                            <div>
                                                                <h3>{{ $review->users->name }}</h3>
                                                                <div class="no-star">
                                                                    @php
                                                                        $rating = $review->rating;
                                                                    @endphp

                                                                    @for ($i = 1; $i <= 10; $i++)
                                                                        @if ($rating >= $i)
                                                                            <i class="ion-ios-star"></i>
                                                                        @else
                                                                            <i class="ion-ios-star-outline"></i>
                                                                        @endif
                                                                    @endfor
                                                                    {{ $rating }}
                                                                </div>
                                                                <p class="time">
                                                                    {{ date('d F Y', strtotime($review->date)) }} by <a
                                                                        href="{{ $review->users->email }}">{{ $review->users->email }}</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <pre style="color: rgb(250, 250, 250)">{{ $review->description }}</pre>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div id="reviews" class="tab review">
                                        <div class="row">
                                            <div class="rv-hd">
                                                <div class="div">
                                                    <h3>Reviews Movies</h3>
                                                </div>
                                            </div>
                                            @if (auth()->check() && auth()->user()->role == 'user')
                                                <form style="margin-left: 25px; color:white" method="post"
                                                    action="/movies">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <input id="rating" name="rating" type="number"
                                                                placeholder="rating : 1-10" class="form-control" required>
                                                            <input type="hidden" name="date"
                                                                value="{{ date('Y-m-d') }}">
                                                            <input type="hidden" name="movies_id"
                                                                value="{{ $movie->id }}">
                                                            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                                                            {{-- <input type="hidden" name="users_id" value="1"> --}}
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <textarea id="description" name="description" placeholder="Description Review" class="form-control" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-4 col-8">
                                                            <button name="submit" type="submit" class="btn"
                                                                style="color:black">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            @endif
                                            @if (!is_null($movie->reviews))
                                                @foreach ($movie->reviews as $item)
                                                    <div class="mv-user-review-item">
                                                        <div class="user-infor">
                                                            <div>
                                                                <h3>{{ $item->users->name }}</h3>
                                                                <div class="no-star">
                                                                    @php
                                                                        $rating = $item->rating;
                                                                    @endphp

                                                                    @for ($i = 1; $i <= 10; $i++)
                                                                        @if ($rating >= $i)
                                                                            <i class="ion-ios-star"></i>
                                                                        @else
                                                                            <i class="ion-ios-star-outline"></i>
                                                                        @endif
                                                                    @endfor
                                                                    {{ $rating }}
                                                                </div>
                                                                <p class="time">
                                                                    {{ date('d F Y', strtotime($item->date)) }} by <a
                                                                        href="{{ $item->users->email }}">{{ $item->users->email }}</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <pre style="color: rgb(250, 250, 250)">{{ $item->description }}</pre>
                                                    </div>
                                                @endforeach
                                            @endif
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
@endsection
