@extends('website.master')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        
        <th scope="col">Mechanic Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Image</th>
      </tr>
    </thead>
    <tbody>
      @foreach($mechanics as $x) <!--mechanics as array-->
      <tr>
        <th scope="row">{{$x->id}}</th>
        
        <td>{{$x->name}}</td>
        <td>{{$x->email}}</td>
        <td>{{$x->phone}}</td>
        <td>{{$x->address}}</td>
        <td>
            <img src="{{url('/uploads/'.$x->image)}}"width="100px" alt="service">
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection