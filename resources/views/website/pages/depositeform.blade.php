@extends('website.master')
@section('content')
@if(session()->has('success'))
    <p class="alert alert-success">
      {{session()->get('success')}}
    </p>
    @endif

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  
  <div class="container">
    <h1><b>Deposite</b></h1>
   
    <hr>

    
    @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>
                      {{$error}}
                    </li>   
                  @endforeach
                </ul>
              </div>
  @endif

    <form action="{{route('website.deposite.store')}}" method="POST" >
     
      @csrf
      
      <div class="form-group">
        <label for="name" style="font-size:20px;"><b></label></b>
        <input hidden type="number" value="{{auth()->user()->id}}" class="form-control" id="name" name="user_id">
        </div>

        <div class="form-group">
          <label for="name" style="font-size:20px;"><b>Remark</label></b>
          <input type="text" class="form-control" id="name" name="remark">
          </div>

          <div class="form-group">
            <label for="name" style="font-size:20px;"><b>Transaction Id</label></b>
            <input type="number" class="form-control" id="name"  name="transaction_id">
            </div>

        

        <div class="form-group">
          <label for="address" style="font-size:20px;"><b>Amount</label></b>
          <input type="text" class="form-control" id="address"  name="amount">
         
        </div>
     
    <button type="submit" class="button btn-submit">Submit</button>
     
    </div>
   
</form>   
<br> 
</body>
</html>
    
@endsection