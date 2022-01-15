@extends('master')

@section('content')

    <h1>User list</h1>

    <table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
        <th scope="col">address</th>
        <th scope="col">workexperience</th>
        <th scope="col">role</th>
        <th scope="col">status</th>
        <th scope="col">image</th>
        


    </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
         <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->workexperience}}</td>
        <td>{{$user->role}}</td>
        <td>{{$user->status}}</td>
        <th>
            <img style="border-radius: 4px;" width="50px;" src=" {{url('/uploads/'.$user->image)}}" alt="user">
    
        </th>
    </tr>   
        @endforeach
    
    
    </tbody>
</table>
@endsection
