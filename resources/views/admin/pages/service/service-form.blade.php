@extends('master')


@section('content')
@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('admin.service.store')}}" method='POST' enctype="multipart/form-data">
    @csrf

<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Service Name*</label>
<input required style="color: white !important" name='name' type="text" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Cost*</label>
<input required style="color: white !important" name='cost' type="number" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Details</label>
<input required style="color: white !important" name='details' type="text" class="form-control" id="exampleInputPassword1">
</div>

{{-- for relation --}}

<select name="servicetype" class="form-select" aria-label="Default select example" >
  <option selected>Open service type*</option>
  @foreach ($data as $item)
  <option value="{{$item->id}}">{{$item->name}}</option>
  @endforeach
</select>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection