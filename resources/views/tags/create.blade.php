@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">Create Tag</h1>
                    <a class="btn btn-success" href="{{route('tags')}}">All tags</a>
                </div>
                </div>
            </div>

         <div class="row">
            <div class="col">
                <form method="POST" action="{{ route('tag.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text"   class="form-control" name="tag">
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
