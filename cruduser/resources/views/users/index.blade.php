@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">

        
<table class="table text-center border table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
            <div class="d-flex justify-content-center">
           <form action="{{asset('users/'.$user->id)}}" method="GET">
            <button type="submit" class="btn btn-success mx-2">Show</button>
           </form>
            <form action="{{asset('users/'.$user->id.'/edit')}}" method="GET"> 
                <button type="submit" class="btn btn-primary mx-2">Edit</button>
               </form>
           <form action="{{asset('users/'.$user->id)}}" method="POST">
           <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">  
            <button type="submit" class="btn btn-warning mx-2">Delete</button>
           </form>
           </div>
           </td>
        </tr>
        @endforeach

    </tbody>
</table>
<div class="d-flex justify-content-center">{{$users->links()}}</div>
</div>
</div>
</div>      
@endsection