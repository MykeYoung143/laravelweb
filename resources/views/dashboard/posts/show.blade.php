@extends('dashboard.layouts.main')

@section('container')

<div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-4">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my posts</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit Post</a>
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete Post</a>
                
                <img src="https://source.unsplash.com/1200x400? {{ $post->category->name }}"
                 alt="{{ $post->category->name }}" class="img-fluid mt-3">

                <article class="my-3 fs-5">
                {!! $post->body !!}
                </article>

            </div>
        </div>
    </div>

@endsection