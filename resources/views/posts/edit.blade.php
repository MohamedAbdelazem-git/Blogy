@extends('layouts/app')
@section('pagetitle')
    Edit Post
@endsection

@section('content')
    {{-- @dd($post) --}}
    @if ($errors->any())
        @dump($errors)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form" enctype="multipart/form-data" action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput1"
                value="{{ $post->title }}" placeholder="Write a descriptive title">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $post->description }}</textarea>
        </div>
        {{-- <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Post Creator</label>
            <select name="user_id" class="form-select" id="exampleFormControlInput2">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" @if ($post->user_id == $user->id) {{ 'selected' }} @endif>
                        {{ $user->name }}</option>
                @endforeach
            </select>
        </div> --}}
        <div class="mb-3">
            <label for="formFile" class="form-label">Post image</label>
            <input class="form-control" type="file" id="formFile" name="image">
            <span>{{ $post->image }}</span>
        </div>
        <button type="submit" class="btn btn-success mt-5 ">edit</button>
    </form>
@endsection
