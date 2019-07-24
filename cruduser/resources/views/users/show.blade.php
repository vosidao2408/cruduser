@extends('layout.app')
@section('content')
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
    <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <form action="{{asset('users/'.$user->id.'/edit')}}" method="GET"> 
                    <button type="submit" class="btn btn-primary mx-2">Update</button>
                   </form>
            </td>
            </tr>
            </tbody>
            </table>
@endsection