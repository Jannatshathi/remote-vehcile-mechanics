@extends('master')


@section('content')

<div class="card text-center">
  <div class="card-header">
    <h1>
      <p style="color:blue">Remote Vehicle Mechanics<p>
    </h1>
  </div>
</div>



<div class="d-flex justify-content-around">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">User List</h5>
      <a href="{{route('admin.user.list')}}" class="btn btn-primary">View</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Mechanics</h5>
      <a href="#" class="btn btn-primary">View</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Service Type</h5>
      <a href="#" class="btn btn-primary">View</a>
    </div>
  </div>
</div>
<div class="d-flex justify-content-around">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Service</h5>
      <a href="#" class="btn btn-primary">View</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Request</h5>
      <a href="#" class="btn btn-primary">View</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Vehicle</h5>
      <a href="#" class="btn btn-primary">View</a>
    </div>
  </div>
</div>
<div class="d-flex justify-content-around">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Deposite</h5>
      <a href="#" class="btn btn-primary">View</a>
    </div>
  </div>
  
</div>

@endsection