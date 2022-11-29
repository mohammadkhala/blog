@extends('layouts.app')
@section('content')
@php
    $genderArray=['Male','Female'];
@endphp
<div ></i>>
<div class="container" style="padding-top: 2%"class="container" <i class="fa fa-align-center" aria-hidden="true">
    <form method="POST" action="{{route('profile.update')}}">
      @csrf
      @method('PUT')
        <div class="form-group">
          <label for="exampleFormControlInput1">name</label>
          <input type="text" class="form-control" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">province</label>
            <input type="text" class="form-control" name="province" value="{{$user->profile->province}}">
          </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">facebook</label>
            <input type="text" class="form-control" name="facebook" value="{{$user->profile->facebook}}">
          </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">gender</label>
          <select class="form-control" name="gender">
            @foreach ($genderArray as $item)
            <option value="{{$item}}" {{($user->profile->gender==$item) ? 'selected' : ''}}>{{$item}}</option>

            @endforeach


          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">bio</label>
          <textarea class="form-control" name="bio" rows="3">
            {{$user->profile->bio}}
          </textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">password</label>
            <input type="email" class="form-control" name="password" >
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">confirm password</label>
            <input type="email" class="form-control" name="c_password" >
          </div>
            <button class="btn btn-success" type="submit" >update</button>
          </div>
      </form>
</div>

</div>













@endsection
