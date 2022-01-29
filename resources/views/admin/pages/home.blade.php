@extends('master')


@section('content')

<div class="card text-center">
  <div class="card-header">
    <h1>
      <p style="color:blue">Remote Vehicle Mechanics<p>
    </h1>
  </div>
</div>
@if (auth()->user()->role=='admin')

<div class="d-flex justify-content-around">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">User List</h5>
      {{$all['users']}}
      <a href="{{route('admin.user.list')}}" class="btn btn-primary">View</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Mechanics</h5>
      {{$all['mechanics']}}
      <a href="{{route('admin.mechanics.list')}}" class="btn btn-primary">View</a>
    </div>
  </div>
  
</div>
<div class="d-flex justify-content-around">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Service</h5>
      {{$all['services']}}
      <a href="{{route('admin.service.list')}}" class="btn btn-primary">View</a>
    </div>
  </div>
  @endif
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Request</h5>
      {{$all['requests']}}
      <a href="{{route('admin.mechanics.list')}}" class="btn btn-primary">View</a>
    </div>
  </div>
  @if (auth()->user()->role=='admin')
</div>
<div class="d-flex justify-content-around">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Deposite</h5>
      {{$all['deposites']}}
      <a href="{{route('admin.mechanics.list')}}" class="btn btn-primary">View</a>
    </div>
  </div>
  @endif
</div>

@endsection