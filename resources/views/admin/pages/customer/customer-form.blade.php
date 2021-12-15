@extends('master')


@section('content')

<form action="{{route('admin.customer.store')}}" method='POST'>
    @csrf
    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Customer Name*</label>
    <input required style="color: white !important" name='name' type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input required style="color: white !important" name='email' type="email" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input required style="color: white !important" name='password' type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone*</label>
    <input required style="color: white !important" name='phone' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection