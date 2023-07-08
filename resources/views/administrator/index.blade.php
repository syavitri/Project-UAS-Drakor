@extends('administrator.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{ asset('admin_asset/assets/images/dashboard/circle.svg') }}" class="card-img-absolute"
                            alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Total Reviews <i
                                class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{ $totalreviews }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{ asset('admin_asset/assets/images/dashboard/circle.svg') }}" class="card-img-absolute"
                            alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Total Movies <i
                                class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{ $totalmovies }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{ asset('admin_asset/assets/images/dashboard/circle.svg') }}" class="card-img-absolute"
                            alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">TOtal Users <i class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{ $totalusers }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                            <div id="visit-sale-chart-legend"
                                class="rounded-legend legend-horizontal legend-top-right float-right">
                            </div>
                        </div>
                        <canvas id="visit-sale-chart" class="mt-4"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Traffic Sources</h4>
                        <canvas id="traffic-chart"></canvas>
                        <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Reviews</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> Date </th>
                                        <th> User </th>
                                        <th> Movies </th>
                                        <th> Rating </th>
                                        <th> Description </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recentreviews as $review)
                                        <tr>
                                            <td> {{ $review->date }} </td>
                                            <td> {{ $review->users->name }} </td>
                                            <td> {{ $review->movies->title }} </td>
                                            <td> {{ $review->rating }} </td>
                                            <td><?= substr($review->description, 0 , '30')?></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Latest Movie Posters</h4>
                        <div class="row mt-3">
                            @foreach ($latestpostermovies as $item)
                            <div class="col-3 pe-1">
                                <img src="{{$item->poster}}"
                                    class="mb-2 mw-100 w-100 rounded" alt="image">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Latest Movies</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Title </th>
                                        <th> Genres </th>
                                        <th> Release Date </th>
                                        <th> Countries </th>
                                        <th> Rating </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($latestmovies as $movie)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $movie->title }} </td>
                                            <td> {{ $movie->genres->name }} </td>
                                            <td> {{ $movie->release_date }} </td>
                                            <td> {{ $movie->countries->name }} </td>
                                            <td> {{ $movie->rating }} </td>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
