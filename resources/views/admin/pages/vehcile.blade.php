@extends('master')

@section('content')

<form action="{{route('admin.vehcile.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Type*</label>
    <input required style="color: white !important" name='type' type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Model*</label>
    <input required style="color: white !important" name='model' type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Color*</label>
    <input required style="color: white !important" name='color' type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image*</label>
    <input required style="color: white !important" name='image' type="file" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
@endsection