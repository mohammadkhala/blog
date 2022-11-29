@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">Edit Post</h1>
                    <a class="btn btn-success" href="{{route('posts')}}">All Post </a>
                </div>
                </div>


            </div>
       <div class="row">
            <div class="col">
                <form method="post" action="{{ route('post.update',['id'=>$post->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input type="text"  value="{{$post->title}}" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        @foreach ($tags as $item )
                              <input type="checkbox" class="form-control" name="tags[]" value="{{$item->id}}"
                            @foreach ($post->tag as $item2 )
                                  @if ($item->id==$item2->id)
                                      checked
                                  @endif
                              @endforeach  >

                              <label for="">{{$item->tag}}</label>
                        @endforeach

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Contant</label>
                        <textarea type="text" class="form-control" name="content">{{$post->content}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Photo</label>
                        <input type="file" class="form-control" name="photo">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-danger" type="submit">update</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
        </div>


@endsection
