@extends('master')
@section('content')

<a href="{{route('admin.service.form')}}" class="btn btn-info">
  Add Service 
</a>

<form action="{{route('admin.service.list')}}" method="GET">
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
      <input value="{{$key}}" type="text" placeholder="Search" name="search" class="form-control">
  </div>
  <div class="col-md-4">
      <button type="submit" class="btn btn-success">Search</button>
  </div>
</div>
</form>
@if($key)
<h4>
  searching for: {{$key}}.found:{{$service->count()}}
</h4>
@endif

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        
        <th scope="col">Service Name</th>
        <th scope="col">Cost</th>
        <th scope="col">Details</th>
        <th scope="col">Service Type</th>
      </tr>
    </thead>
    <tbody>
      @foreach($service as $key=>$x) <!--service as array-->
      <tr>
        {{-- <th scope="row">{{$x->id}}</th> --}}
        <td>{{$key+1}}</td>
        <td>{{$x->name}}</td>
        <td>{{$x->cost}}</td>
        <td>{{$x->details}}</td>
        <td>{{$x->servicetypes->name}}</td>
      
      </tr>
      @endforeach
    </tbody>
  </table>
    
@endsection