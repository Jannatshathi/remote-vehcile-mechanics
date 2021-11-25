@extends('master')


@section('content')

<style>
  input[type=text]:focus{
  color: black;     /* oranges! yey */
}
</style>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add service
</button>
<a class="btn btn-primary" href="{{route('service.category')}}" role="button">Add category</a>
 
{{-- @if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif

{{-- @if(session()->has('error'))
<p class="alert alert-danger">
    {{session()->get('error')}}
</p>
@endif --}}

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}} --}}

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      
      <th scope="col">Service Name</th>
      <th scope="col">Cost</th>
      <th scope="col">Details</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
    @foreach($service as $x) <!--service as array-->
    <tr>
      <th scope="row">{{$x->id}}</th>
     
      <td>{{$x->name}}</td>
      <td>{{$x->cost}}</td>
      <td>{{$x->details}}</td>
      <td>{{$x->category->name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <!-- form  -->

      
      <form action="{{route('service.store')}}" method='POST'>
        @csrf
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Service Name</label>
    <input style="color: black !important" name='name' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cost</label>
    <input style="color: black !important" name='cost' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Details</label>
    <input style="color: black !important" name='details' type="text" class="form-control" id="exampleInputPassword1">
  </div>


  <select class="form-select" aria-label="Default select example" name="category">
      <option selected>Open this select menu</option>
      @foreach ($data as $item)
      <option value="{{$item->id}}">{{$item->name}}</option>
      @endforeach
  </select>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>


      </div>
      <div class="modal-footer" style="background-color: black;334">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
@endsection