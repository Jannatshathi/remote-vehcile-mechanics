@extends('master')


@section('content')

<a href="{{route('admin.vehcile')}}" class="btn btn-info">
    Add Vehcile
  </a>
  

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach($vehcile as $key=>$x) <!--mechanics as array-->
    <tr>
      {{-- <th scope="row">{{$x->id}}</th> --}}
      <td>{{$key+1}}</td>
      <td>{{$x->name}}</td>
      <td>{{$x->details}}</td>
      <td>
        <img src="{{url('/uploads/'.$x->image)}}"width="100px" alt="vehcile">
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
