@extends('website.master')
@section('content')
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/ecour/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Dec 2021 14:34:07 GMT -->

<body>
    <div class="container">
        
        <div class="page-wrapper">
            
            
            
            <section class="Login-wrap pt-100 pb-100">
                <div class="container">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                        <div class="login-form">
                            <div class="login-header bg-blue">
                                <h2 class="text-center mb-0">Log In</h2>
                            </div>
                            <div class="login-body">
                                
                                <form class="form-wrap" action="{{route('user.do.login')}}", method="POST" >
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
                        </div>
                    </div>
                </div>
            </section>
            
            
            
            
        </div>
        
    </div>
    <a href="#" class="back-to-top bounce"><i class="las la-arrow-up"></i></a>
    
    
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
    
    <script src="assets/js/jquery-ui.min.js"></script>
    
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    
    <script src="assets/js/swiper-min.js"></script>
    
    <script src="assets/js/jquery-magnific-popup.js"></script>
    
    <script src="assets/js/countdown.js"></script>
    
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/ecour/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Dec 2021 14:34:08 GMT -->
</html>
@endsection