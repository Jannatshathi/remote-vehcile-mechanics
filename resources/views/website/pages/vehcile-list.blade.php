@extends('website.master')


@section('content')


  <div class="row">
    @foreach($vehcile as $key=>$x)
      
    <div class="col-lg-4 mb-4">
       <div class="card h-100" >
              <h3> {{$x->type}} </h3>
          <div class="card-body">
            <p><img src="{{url('uploads/'.$x->image)}}" height="100px"width="300px" alt="vehcile"></p>
             
             <h4><b>Model name:</b> {{$x->model}}</h4>
             <h6>details: {{$x->color}}</h6>
            
          </div>
          <a class="btn btn-primary" href="#" role="button">View all</a>
          
       
    </div>
  </div>
  @endforeach
@endsection


