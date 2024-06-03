@extends('layout')

@section('content')
    <h1 class="my-4">Blog Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>
    @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <p class="card-text">{{ $post->content }}</p>
                <a href="{{ route('posts.show', $post) }}" class="btn btn-info">View</a>
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    @endforeach

    <!-- Pagination Links -->
    <div class="d-flex justify-content-center">
        {{ $posts->links('pagination::bootstrap-5') }}
    </div>
@endsection
