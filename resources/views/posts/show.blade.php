@extends('layouts/app')
@section('content')
    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="card mb-3 w-100" style="max-width: 540px; ">
            <div class="row g-0">
                <h6 class="card-header fw-bold text-center">Post Info</h6>

                <div class="col-md-4">
                    <img src="{{ asset('images') }}/{{ $post->image }}" class="img-fluid rounded-start" alt="..."
                        style="max-height: 100px">
                </div>
                <div class="col-md-8">

                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text"><small class="text-muted">{{ $post->description }}</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 w-100" style="max-width: 540px; ">
            <h6 class="card-header fw-bold">Post Creator Info</h6>
            <div class="card-body">
                {{-- @dd($post) --}}
                <div class="d-flex align-items-center">
                    <h6 class="card-title pe-1 m-0 fw-bold">Name:- </h6>
                    <p class="m-0">{{ $post->user->name }}</p>
                </div>
                <div class="d-flex align-items-center">
                    <h6 class="card-title pe-1 m-0 fw-bold">Email:- </h6>
                    <p class="m-0">{{ $post->user->email }}</p>
                </div>
                <div class="d-flex align-items-center">
                    <h6 class="card-title pe-1 m-0 fw-bold">Created At:- </h6>
                    <p class="m-0">{{ $post->created_at->format('l jS \of F Y h:i:s A') }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
