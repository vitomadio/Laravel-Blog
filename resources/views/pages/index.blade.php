@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
        aliquam, dolore laboriosam dolores reprehenderit minima impedit ullam
        mollitia deserunt omnis minus, doloribus nisi quod consectetur veniam
        eum et modi tempora!</p>
    @guest
    <p>
        <a href="" class="btn btn-primary btn-lg">
            Login
        </a>
        <a href="" class="btn btn-success btn-lg">
            Register
        </a>
    </p>
    @endguest
</div>
@endsection
