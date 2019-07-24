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
                <form action="{{asset('/users/')}}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <input type="text" class="form-control my-2" name="name" placeholder="Name">   
                        <input type="email" class="form-control my-2" name="email" placeholder="Email address">
                        <input type="password" class="form-control my-2" name="password" placeholder="Password">
                        <button class="btn btn-danger my-2" type="submit">Confirm</button>  
                </form>
            </div>
        </div>
    </div>
@endsection