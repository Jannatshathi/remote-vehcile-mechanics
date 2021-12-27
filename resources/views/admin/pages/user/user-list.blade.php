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
        <th scope="col">image</th>
        <th scope="col">action</th>


    </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
         <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone}}</td>
        <th>
            <img style="border-radius: 4px;" width="150px;" src=" {{url('/uploads/'.$user->image)}}" alt="user">
    
        </th>
        <td>
            <a href="{{route('admin.user.edit',$user->id)}}" class="btn btn-primary">Edit</a>

        </td>
    </tr>   
        @endforeach
    
    
    </tbody>
</table>
@endsection
