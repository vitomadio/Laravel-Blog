@extends('layouts.app')

@section('content')
<a href="{{ url('/posts') }}" class="btn btn-light">Go Back</a>
<h1>{{ $post->title }}</h1>
<img src="{{ url('/storage/cover_images/'.$post->cover_image) }}" alt="post image" class="w-100">
<div>
  <p>{!! $post->body !!}</p>
</div>
<hr>
<small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
<hr>
@auth
@if(Auth::user()->id == $post->user_id)
<a href="{{ url('/posts/'.$post->id.'/edit') }}" class="btn btn-light">Edit</a>
{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
  {{ Form::hidden('_method', 'DELETE') }}
  {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
{!! Form::close() !!}
@endif
@endauth
@endsection


