@extends('website.master')

@section('content')



<div class="container">
    <h1>Types of Service</h1>
    <a href="{{route('admin.service.type')}}" class="btn btn-info" type="button">chose service Type</a>

<table class="table">
    <thead>
    <tr>
        {{-- <th scope="col">#</th> --}}
        <th scope="col">Name</th>
        <th scope="col">Status</th>
        <th scope="col">Description</th>
        
        
    </tr>
    </thead>
    @foreach ($services as $a)
    <tr>
        {{-- <td scope="row">{{$a->id}}</th> --}}
      
      <td>{{$a->name}}</td>
      <td>{{$a->status}}</td>
      <td>{{$a->description}}</td>
      
     
    </tr>
        
    @endforeach
  
    </tbody>
</table>
</div>

@endsection