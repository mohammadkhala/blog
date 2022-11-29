@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">Create Post</h1>
                    <a class="btn btn-success" href="{{route('posts')}}">All Post </a>
                </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card" >
                    <img src="{{URL::asset($post->photo)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$post->title}}</h5>
                      <p class="card-text">{{$post->content}}</p>
                      <p >created at {{$post->created_at}}</p>
                      <p >updated at {{$post->updated_at}}</p>
                      <a class="btn btn-success" href="{{route('posts')}}">All Post </a>

                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
