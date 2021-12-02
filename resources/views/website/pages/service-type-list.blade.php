@extends('website.master')

@section('content')



    <h1>Types of Vehcile</h1>
    <a href="{{route('admin.service.type')}}" class="btn btn-info" type="button">Add service Type</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        
    </tr>
    </thead>
    @foreach ($services as $a)
    <tr>
        <th scope="row">{{$a->id}}</th>
      
      <td>{{$a->name}}</td>
      
     
    </tr>
        
    @endforeach
  
    </tbody>
</table>

@endsection