@extends('website.master')
@section('content')

<div class="col-md-2"></div>
  <div class="col-md-8">
<table class="table">
    <thead>
      <tr>
       
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Location</th>
        <th scope="col">Service</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    @foreach ($req as $item)
    <th scope="row">{{$item->id}}</th>
      
    <td>{{$item->name}}</td>
    <td>{{$item->address}}</td>
    <td>{{$item->location}}</td>
    <td>{{$item->service}}</td>
    <td>{{$item->status}}</td>
    <td>
      @if($item->status == 0)
      <a href="{{route('admin.view.request',$item->id)}}" class="btn btn-primary">Accepted</a>
      @else
      <a href="" class="btn btn-danger">Deleted</a>
      <a href="" class="btn btn-danger">Pending</a>
      
      @endif
    </td>
    @endforeach
  </table>
</div>
<div class="col-md-2"></div>
    
@endsection