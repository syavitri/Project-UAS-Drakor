@extends('administrator.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Movies Data
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
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a href="/administrator/movies/create" class="btn btn-info">Create Data</a>
                        <div class="table-responsive">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    <p>{{ session('success') }}</p>
                                </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No </th>
                                        <th> Title </th>
                                        <th> Genre </th>
                                        <th> Country </th>
                                        <th> Rating </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($movies as $item)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $item->title }} </td>
                                            <td> {{ $item->genres->name }} </td>
                                            <td> {{ $item->countries->name }} </td>
                                            <td> {{ $item->rating }} </td>
                                            <td>
                                                <a href="/movies/{{ $item->id }}"
                                                    class="btn btn-sm btn-primary">Detail</a>
                                                <a href="/administrator/movies/{{ $item->id }}/edit"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <form action="/administrator/movies/{{ $item->id }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
