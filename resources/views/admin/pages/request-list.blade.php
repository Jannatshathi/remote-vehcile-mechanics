@extends('master')


@section('content')

@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Request List
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Location</th>
      <th scope="col">Service</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($request as $x) <!--request as array-->
    <tr>
      <th scope="row">{{$x->id}}</th>
      
      <td>{{$x->name}}</td>
      <td>{{$x->address}}</td>
      <td>{{$x->location}}</td>
      <td>{{$x->service}}</td>
      <td>{{$x->status}}</td>
      <td>
        @if($x->status == 0)
        <a href="{{route('admin.view.request',$x->id)}}" class="btn btn-primary">Accepted</a>
        @else
        <a href="" class="btn btn-danger">Delete</a>
        <a href="" class="btn btn-danger">Pending</a>
        
        @endif
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection