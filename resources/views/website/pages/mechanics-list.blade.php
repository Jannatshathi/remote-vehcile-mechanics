@extends('website.master')
@section('content')

<div class="container">
<div class="row">
  @foreach($mechanics as $x) <!--mechanics as array-->
    
  <div class="col-lg-4 mb-4">
     <div class="card h-100" >
            <h3> {{$x->name}} </h3>
        <div class="card-body">
          <p><img src="{{url('uploads/'.$x->image)}}" height="20px"width="150px" alt="mechanic"></p>
           
           {{-- <h4><b>Model name:</b> {{$x->model}}</h4> --}}
           <h6>details: {{$x->address}} <br>
            {{$x->phone}} <br>
            {{$x->email}}
          
          </h6>
          
        </div>
        <a class="btn btn-primary" href="#" role="button">View all</a>
        
     
  </div>
</div>
@endforeach

{{-- <table class="table">
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
  </table> --}}
  @endsection