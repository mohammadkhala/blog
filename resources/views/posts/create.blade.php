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
            <div class="row">
                <div class="col">
                    <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Title</label>
                            <input type="text" class="form-control" name="title">

                        </div>
                        <div class="form-group">
                            @foreach ($tags as $item )

                                  <label >{{$item->tag}}</label>
                            @endforeach

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Content</label>
                            <textarea type="text" class="form-control" name="content"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Photo</label>
                            <input type="file" class="form-control" name="photo">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">save</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
        </div>


@endsection
