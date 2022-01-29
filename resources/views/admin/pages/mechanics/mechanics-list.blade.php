@extends('master')


@section('content')
{{-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
  <div class="card card-stats">
    <div class="card-header card-header-warning card-header-icon">
      <div class="card-icon">
        <i class="material-icons">content_copy</i>
      </div>
      <p class="card-category">Used Space</p>
      <h3 class="card-title">49/50
        <small>GB</small>
      </h3>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons text-warning">warning</i>
        <a href="#pablo" class="warning-link">Get More Space...</a>
      </div>
    </div>
  </div>
</div> --}}
<style>
   .form-control{
     color: black !important;
   }     /* oranges! yey */
}
</style>
<h2>Mechanics list</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      
      <th scope="col">Mechanic Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Work Experience</th>
      <th scope="col">Amount</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Status</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($mechanics as $key=>$x) <!--mechanics as array-->
    <tr>
      <th scope="row">{{$key+1}}</th>
      
      <td>{{$x->name}}</td>
      <td>{{$x->email}}</td>
      <td>{{$x->phone}}</td>
      <td>{{$x->address}}</td>
      <td>{{$x->workexperience}}</td>
      <td>{{$x->amount}}</td>
      <td>{{$x->payment_method}}</td>
      <td>{{$x->status}}</td>
      <td>
        <img src="{{url('/uploads/'.$x->image)}}"width="100px" alt="mechanic">
      </td>
      <td>
        <a href="{{route('admin.delete.mechanics',$x->id)}}" class="btn btn-success">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{-- <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color: black;">
        
      <!-- form  -->

  
  <form action="{{route('admin.mechanics.store')}}" method='POST', enctype="multipart/form-data">
    @csrf
    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mechanic Name</label>
    <input style="color: white !important" name='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input style="color: white !important" name='email' type="email" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input style="color: white !important" name='password' type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone</label>
    <input style="color: white !important" name='phone' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input style="color: white !important" name='address' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image</label>
    <input style="color: white !important" name='image' type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
      <div class="modal-footer" style="background-color: black;334">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

 --}}
 @endsection
