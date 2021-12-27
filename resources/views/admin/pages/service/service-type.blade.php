@extends('master')


@section('content')

<h1>Service Type</h1>


<form action="{{route('admin.service.type.store')}}" method='POST' >
    @csrf
    
    <div class="mb-3">
        <label for="name" class="form-label">Name*</label>
        <input name="name" required style="color: white !important" name="name" placeholder="Enter service Name" type="text" class="form-control" id="name" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Status</label>
        <input name="status" required style="color: white !important" name="name" placeholder="Enter service status" type="text" class="form-control" id="name" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Description</label>
        <input name="description" required style="color: white !important" name="name" placeholder="Enter service description" type="text" class="form-control" id="name" aria-describedby="emailHelp">

    </div>


    {{-- <div class="mb-3">
        <label for="details" class="form-label">Service category</label>
        <input required style="color: white !important" name="details" placeholder="Enter service details"  type="text" class="form-control" id="details" aria-describedby="emailHelp">
    </div> --}}

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
