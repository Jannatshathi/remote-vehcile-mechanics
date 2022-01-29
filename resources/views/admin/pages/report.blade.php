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
<form action="{{route('admin.report')}}"  method="GET" style="text-align:center;">
  <div class="row" >

    <div class="col-4 mt-3" >
      <label for="fromdate" class="form-label"><h5>From</h5></label>
      <input name="fromdate" type="date" class="form-control" id="fromdate" >
    </div>

    <div class="col-4 mt-3">
      <label for="todate" class="form-label"><h5>To</h5></label>
      <input name="todate" type="date" class="form-control" id="todate" >
    </div>
      
      <div class="col-3 mt-5 pt-2">
          <button  type="submit" class="btn btn-success btn-sm">Search</button>
      </div>
  </div>
</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Location</th>
      <th scope="col">Service</th>
      
      
    </tr>
  </thead>
  <tbody>
  @foreach($reports as $x) <!--request as array-->
    <tr>
      <th scope="row">{{$x->id}}</th>
      {{-- @dd($x->service); --}}
      <td>{{$x->name}}</td>
      <td>{{$x->address}}</td>
      <td>{{$x->location}}</td>
      <td>{{$x->service->name}}</td>
     
    @endforeach
  </tbody>
</table>
@endsection