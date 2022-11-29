@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @if ($tags->count() > 0)
                <div class="col">
                    <div class="jumbotron">
                        <h1 class="display-4">all Tags</h1>
                        <a class="btn btn-success" href="{{ route('tag.create') }}">Create Tag </a>

                    </div>
                </div>
        </div>

        <div class="row">

            <div class="col">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tags as $item)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $item->tag }}</td>
                             <td>
                                <a href="{{ route('tag.edit', ['id' => $item->id]) }}"> <i
                                        class="fa-solid fa-2x fa-pen-to-square"></i></a>
                                <a class="text-danger" href="{{ route('tag.destroy', ['id' => $item->id]) }}"> <i
                                        class="fa-solid fa-2x fa-trash"></i></a>

                            </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>


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
