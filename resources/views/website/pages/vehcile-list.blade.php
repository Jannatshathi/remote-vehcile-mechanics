@extends('website.master')


@section('content')


  <div class="row">
    @foreach($vehcile as $key=>$x)
      
    <div class="col-lg-4 mb-4">
       <div class="card h-100" >
              <h3> {{$x->name}} </h3>
          <div class="card-body">
            <p><img src="{{url('uploads/'.$x->image)}}" height="100px"width="300px" alt="vehcile"></p>
             
             
             <h6>details: {{$x->details}}</h6>
            
          </div>
          <a class="btn btn-primary" href="#" role="button">View all</a>
          
       
    </div>
  </div>
  @endforeach
@endsection


