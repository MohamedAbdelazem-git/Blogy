@extends('layouts/app')
@section('pagetitle')
    All Posts
@endsection
@section('content')
    {{-- @dd($posts) --}}
    <a href="{{ route('posts.create') }}"><button type="button" class=" btn btn-outline-primary">Add
            Post</button></a>
    <table class="table table-hover mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- @dd($posts) --}}

            <tr>
                @foreach ($posts as $post)
            <tr>
                <td class="align-middle">{{ $post->id }}</td>
                <td class="align-middle"><img src="{{ asset('images') }}/{{ $post->image }}" alt="" srcset=""
                        width="40px" height="40px">
                </td>
                <td class="align-middle">{{ $post->title }}</td>
                <td class="align-middle">{{ $post->user->name }}</td>
                <td class="align-middle">{{ $post->created_at->format('Y-m-d') }}</td>
                <td class="align-middle" colspan="3">
                    <a href="{{ route('posts.show', $post->id) }}"> <button type="button" class="btn btn-light me-2"><i
                                class="fa-solid fa-eye"></i></button></a>
                    <a href="{{ route('posts.edit', $post->id) }}"> <button type="button" class="btn btn-warning me-2"><i
                                class="fa-solid fa-pen-to-square"></i></button></a>
                    <form class=" d-inline" action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger "><i class="fa-regular fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tr>
        </tbody>
    </table>
    {{ $posts->render() }}
@endsection
