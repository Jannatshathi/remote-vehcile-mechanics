@extends('master')

@section('content')

<form action="{{route('admin.update.request',$status->id)}}" method="POST">
    @method('put')
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Name</label>
      <input value="{{$status->name}}" name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Address</label>
        <input value="{{$status->address}}" name="address" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Location</label>
        <input value="{{$status->location}}" name="location" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Service</label>
        <input value="{{$status->service_id}}" name="service" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label>
        <select name="status" class="form-control" id="exampleFormControlSelect1">
          <option style="color: black" value="accepted" >Accepted</option>
          {{-- <option style="color: black" value="" >Delete</option> --}}
          <option style="color: black" value="confirm" >Confirm</option>

        </select>
      </div>
    
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection


