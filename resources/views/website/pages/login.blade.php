
@extends('website.master')
@section('content')
<div class="row">

  <div class="col-md-2"></div>
  <div class="col-md-8">
    <form action="{{route('user.do.login')}}", method="POST" >
      @csrf
      <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input required id="email" name="email" type="email" placeholder="Email Address" >
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="pwd">Password</label>
                <input id="password" name="password" type="password" placeholder="Password">
            </div>
        </div>
        
        <!-- <div class="col-lg-6 col-md-6 col-6 text-end mb-20">
            <a href="forgot-pwd.html" class="link">Forgot Password?</a>
        </div> -->
        <div class="col-lg-12">
            <div class="form-group">
                <button class="btn v1">Log In</button>
            </div>
        </div>
        
        
        <div class="col-md-12 text-center">
            <p class="mb-0">Don’t Have an Account? <a class="link" href="{{route('user.registration')}}">Create One</a></p>
        </div>
    </div>
            
        
    </form>
  </div>
  <div class="col-md-2"></div>

</div>

  
@endsection