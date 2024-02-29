@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-box-arrow-in-left"></i>Back to all my posts</a>
                <a href="" class="btn btn-warning"><i class="bi bi-box-arrow-in-left"></i>Edit</a>
                <a href="" class="btn btn-danger"><i class="bi bi-box-arrow-in-left"></i>Delete</a>

                <img src="https://source.unsplash.com/1000x400?{{ $post->category->name }}" alt="{{ $post->category->name }}"
                    class="img-fluid mt-3">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/posts">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
