@extends('master')


@section('content')

<h1>Create new category</h1>
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


<form action="{{route('admin.category.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Category Name*</label>
        <input required style="color: white !important" name="name" placeholder="Enter Category Name" type="text" class="form-control" id="name" aria-describedby="emailHelp">

    </div>

    

    <div class="mb-3">
        <label for="details" class="form-label">Category details</label>
        <input required style="color: white !important" name="details" placeholder="Enter Category details"  type="text" class="form-control" id="details" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
