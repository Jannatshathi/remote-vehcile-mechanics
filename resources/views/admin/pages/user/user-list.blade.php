@extends('master')

@section('content')

    <h1>Order list</h1>

    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
         <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone}}</td>
    </tr>   
        @endforeach
    
    
    </tbody>
</table>
@endsection
