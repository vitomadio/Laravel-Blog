@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard
                    <a href="{{ url('/posts/create') }}"
                        class="btn btn-primary float-right">Create Post</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h3 class="text-center">Your Blog Posts</h3>
                    <hr>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>
                                Title
                            </th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>
                                {{ $post->title }}
                            </td>
                            <td><a href="{{ url('/posts/'.$post->id.'/edit') }}"
                                    class="btn btn-light float-right">Edit</a></td>
                            <td>
                                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                              {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
