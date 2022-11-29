@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @if ($posts->count() > 0)
                <div class="col">
                    <div class="jumbotron">
                        <h1 class="display-4">all Post</h1>
                        <a class="btn btn-success" href="{{ route('posts') }}">all Post </a>

                    </div>
                </div>


            </div>

        <div class="row">

            <div class="col">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">User</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $item)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>
                                    <img src="{{URL::asset($item->photo) }}" alt="{{URL::asset($item->photo) }}" class="img-tumbnail "
                                        width="100" height="100">

                                 <td>
                                <a href="{{ route('post.restore', ['id'=>$item->id]) }}"> <i class="fa-solid fa-2x fa-trash-arrow-up"></i></a>
                                <a class="text-danger" href="{{ route('post.hdelete', ['id'=>$item->id]) }}"> <i
                                        class="fa-solid fa-2x fa-trash"></i></a>

                            </td>
                                    </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        @else
            <div class="col">
                <div class="alert alert-danger" role="alert">
                    No Post
                </div>
            </div>
            @endif

        </div>
    </div>
@endsection
