@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">Update Tag</h1>
                    <a class="btn btn-success" href="{{route('tags')}}">All Tags </a>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form method="POST" action="{{ route('tag.update',['id'=>$tag->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text"  value="{{$tag->tag}}" class="form-control" name="tag">
                        </div>


                        <div class="form-group">
                            <button class="btn btn-success" type="submit">update</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
           </div>


@endsection
