@extends('website.master')
@section('style')
<link rel="stylesheet" href="/css/style.css">
@endsection
@section('javascript')
<script src="/js/app.js"> </script>
@endsection

@section('content')
<style>
  .registration{
    background-color: rgb(161, 161, 235); 
  }
</style>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="registration">
  <div class="row">

    <div class="col-md-2"></div>
    <div class="col-md-8">
      <form action="{{route('website.register.store')}}", method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
    
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputPassword1">
              </div>
              
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
            <input required name="phone" type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input name="address" type="text" class="form-control" id="exampleInputPassword1">
          </div>
  {{-- 
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Amount</label>
          <input required name="amount" type="number" class="form-control" id="exampleInputPassword1">
        </div> --}}
         <br>
         <br><br><br>
          {{-- <div class="amount fadeout">
          <label for="exampleInputPassword1" class="form-label">amount</label>
          <input required name="amount" type="number" class="form-control" id="exampleInputPassword1">
        </div> --}}
      
          
          <div class="mb-3 marge ip">
            <label for="exampleInputPassword1" class="form-label">Image</label>
            <input name="user_image" type="file" class="form-control" id="exampleInputPassword1">
          </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="col-md-2"></div>
  
  </div>
</div>  


  
@endsection