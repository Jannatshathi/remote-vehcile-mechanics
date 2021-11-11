@extends('master')


@section('content')


  

<form class="row g-3">
<div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>

  

  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>

  <div class="col-md-12">
    <label for="inputCity" class="form-label">Phone</label>
    <input type="number" class="form-control" id="inputCity">
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
   
  </div>
  
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label">State</label>
  </div>
  
  
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-success">submit</button>
  </div>
</form>
@endsection