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
      {{-- @dd($x->service); --}}
      <td>{{$x->name}}</td>
      <td>{{$x->address}}</td>
      <td>{{$x->location}}</td>
      <td>{{$x->service->name}}</td>
      <td>
        @if($x->status == 'pending')
        <a href="{{route('admin.view.request',$x->id)}}" class="btn btn-danger">Pending</a>
        @elseif($x->status == 'confirm')
        <a href="{{route('admin.view.request',$x->id)}}" class="btn btn-success">confirmed</a>
        
        @else
        <a href="" class="btn btn-info">Accepted</a>
        
        @endif
      </td>

      <td>
        @if($x->status == 'pending')
        <a href="{{route('admin.view.request',$x->id)}}" class="btn btn-primary">Accept</a>
        <a href="{{route('admin.delete.request',$x->id)}}" class="btn btn-success">Delete</a>

        @elseif($x->status == 'confirm')
        
        @else
        {{-- <a href="{{route('admin.view.request',$x->id)}}" class="btn btn-danger">Pending</a> --}}
        <a href="{{route('admin.view.request',$x->id)}}" class="btn btn-success">Confirmed</a>
        
        @endif
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection