@extends('layouts.app')

@section('content')

<h1>Posts</h1>
@if(count($posts) > 0)
  @foreach($posts as $post)
  <div class="card p-2 mb-2">
    <div class="row">
      <div class="col-4">
        <img src="{{ url('/storage/cover_images/'.$post->cover_image) }}" alt="post cover image" class="w-100">
      </div>
      <div class="col-8"> 
        <h3><a href="{{ url('/posts/'.$post->id)}}">{{ $post->title }}</a></h3>
        <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
      </div>
    </div>
  </div>
  @endforeach
  {{ $posts->links() }} <!---Pagination --->
@else
  <p>No posts found.</p>
@endif
@endsection