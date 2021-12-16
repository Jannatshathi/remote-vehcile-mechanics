@extends('website.master')
@section('content')
<div class="row">

  <div class="col-md-2"></div>
  <div class="col-md-8">
    <form action="{{route('user.post.registration')}}", method="POST" enctype="multipart/form-data" >
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
          <input name="phone" type="number" class="form-control" id="exampleInputPassword1">
        </div>
        
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Image</label>
          <input name="user_image" type="file" class="form-control" id="exampleInputPassword1">
        </div>
  
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <div class="col-md-2"></div>

</div>

  
@endsection