@extends('layout.app')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{asset('/users/'.$user->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                        <input type="text" class="form-control my-2" name="name" placeholder="Name" value="{{$user->name}}">   
                        <input type="email" class="form-control my-2" name="email" placeholder="Email address" value="{{$user->email}}" >
                        <button class="btn btn-warning my-2" type="submit">Submit</button>  
                </form>
            </div>
        </div>
    </div>
@endsection