@extends('master')
@section('content')

<div class="row">

  <div class="col-md-8">
    <form>
      <div class="mb-3">
  
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Name</label>
              <input value="{{$deposite->users->name}}"  name="name" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input value="{{$deposite->users->email}}" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
      
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Phone</label>
          <input  value="{{$deposite->users->phone}}" name="phone" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Address</label>
          <input value="{{$deposite->users->address}}" name="address" type="text" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Amount</label>
          <input value="{{$deposite->amount}}" name="address" type="text" class="form-control" id="exampleInputPassword1">
        </div>

       <br>
      

      <button type="submit" class="btn btn-primary">Print</button>
    </form>
  </div>
  <div class="col-md-2"></div>

</div>

  
@endsection