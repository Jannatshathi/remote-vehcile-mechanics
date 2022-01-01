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

    <form action="{{route('admin.deposite.store')}}" method="POST" enctype="multipart/form-data">
     
      @csrf
      
      <div class="form-group">
        <label for="name" style="font-size:20px;"><b>User Id</label></b>
        <input type="text" class="form-control" id="name"  placeholder="Enter Your User Id" name="user_id">
        </div>

        <div class="form-group">
          <label for="name" style="font-size:20px;"><b>Remark</label></b>
          <input type="text" class="form-control" id="name"  placeholder="Remark" name="remark">
          </div>

          <div class="form-group">
            <label for="name" style="font-size:20px;"><b>Transaction Id</label></b>
            <input type="number" class="form-control" id="name"  placeholder="Enter Your Transaction_Id" name="transaction_id">
            </div>

        

        <div class="form-group">
          <label for="address" style="font-size:20px;"><b>Amount</label></b>
          <input type="text" class="form-control" id="address"  placeholder="Enter the Amount" name="amount">
         
        </div>

    <div class="form-group">
      <label for="amount" style="font-size:20px;"><b>Reciept</label></b>
      <input type="file" class="form-control" id="amount"  placeholder="Enter the receipt" name='image'>
     
    </div>
     
    <button type="submit" class="button btn-submit">Submit</button>
     
    </div>
   
</form>   
<br> 
</body>
</html>
    
@endsection