@extends('master')

@section('content')

    <h1>User list</h1>

    <table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Image</th>
        


    </tr>
    </thead>
    <tbody>
        @foreach ($users as $key=>$user)
         <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->address}}</td>
        <th>
            <img style="border-radius: 4px;" width="50px;" src=" {{url('/uploads/'.$user->image)}}" alt="user">
    
        </th>
    </tr>   
        @endforeach
    
    
    </tbody>
</table>
@endsection
