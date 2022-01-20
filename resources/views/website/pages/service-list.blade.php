@extends('website.master')
@section('content')



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
