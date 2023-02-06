@extends('layouts/app')
@section('content')
    <div class="card mt-5">
        <h6 class="card-header">Post Info</h6>
        <div class="card-body">
            {{-- @dd($post) --}}
            <div class="d-flex align-items-center">
                <h6 class="card-title pe-1 m-0">Title:- </h6>
                <p class="m-0">{{ $post->title }}</p>
            </div>
            <div class="d-flex flex-column align-items-start mt-1">
                <h6 class="card-title pe-1 m-0">Description:- </h6>
                <p class="m-0">{{ $post->description }}</p>
            </div>
        </div>
    </div>
    <div class="card mt-5">
        <h6 class="card-header">Post Creator Info</h6>
        <div class="card-body">
            {{-- @dd($post) --}}
            <div class="d-flex align-items-center">
                <h6 class="card-title pe-1 m-0">Name:- </h6>
                <p class="m-0">{{ $post->user->name }}</p>
            </div>
            <div class="d-flex align-items-center">
                <h6 class="card-title pe-1 m-0">Email:- </h6>
                <p class="m-0">{{ $post->user->email }}</p>
            </div>
            <div class="d-flex align-items-center">
                <h6 class="card-title pe-1 m-0">Created At:- </h6>
                <p class="m-0">{{ $post->created_at->format('l jS \of F Y h:i:s A') }}</p>
            </div>
        </div>
    </div>
@endsection
