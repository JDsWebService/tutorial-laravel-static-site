@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

    <div class="jumbotron">
        <h1 class="display-4">Welcome to Our Site!</h1>
        <p class="lead">This website is made using Laravel 5.7!</p>
        <hr class="my-4">
        <p>This site was made with the help of @WebDevHacks!</p>
        <a class="btn btn-primary btn-lg" href="https://twitter.com/_WebDevHacks" role="button">
           <i class="fab fa-twitter"></i> Follow
        </a>
    </div>

@endsection