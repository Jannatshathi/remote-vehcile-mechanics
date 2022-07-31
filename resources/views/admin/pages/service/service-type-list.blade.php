@extends('master')
@section('content')

<a href="{{route('admin.service.type')}}" class="btn btn-info">
    Add Service Type
  </a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        
        <th scope="col">Name</th>
        <th scope="col">Status</th>
        <th scope="col">Description</th>
       
      </tr>
    </thead>
    <tbody>
      @foreach($stype as $key=>$x) <!--service as array-->
      <tr>
        {{-- <th scope="row">{{$x->id}}</th> --}}
        <td>{{$key+1}}</td>
        <td>{{$x->name}}</td>
        <td>{{$x->status}}</td>
        <td>{{$x->description}}</td>
       
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$stype->links()}}
@endsection