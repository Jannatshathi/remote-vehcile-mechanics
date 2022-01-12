@extends('master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<body>
  
  <div class="container">
    <h1><b>Deposite</b></h1>
   
    <hr>

    @if(session()->has('success'))
    <p class="alert alert-success">
      {{session()->get('success')}}
    </p>
    @endif

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

    <form action="{{route('admin.update.deposite',$status->id)}}" method="POST" enctype="multipart/form-data">
      @method('put')
      @csrf
      
      <div class="form-group">
        <label for="name" style="font-size:20px;"><b>User Id</label></b>
        <input value="{{$status->user_id}}" type="text" class="form-control" id="name"  placeholder="Enter Your User Id" name="user_id">
        </div>

        <div class="form-group">
          <label for="name" style="font-size:20px;"><b>Remark</label></b>
          <input value="{{$status->remark}}" type="text" class="form-control" id="name"  placeholder="Remark" name="remark">
          </div>

          <div class="form-group">
            <label for="name" style="font-size:20px;"><b>Transaction Id</label></b>
            <input value="{{$status->transaction_id}}" type="number" class="form-control" id="name"  placeholder="Enter Your Transaction_Id" name="transaction_id">
            </div>

        

        <div class="form-group">
          <label for="address" style="font-size:20px;"><b>Amount</label></b>
          <input value="{{$status->amount}}" type="text" class="form-control" id="address"  placeholder="Enter the Amount" name="amount">
         
        </div>

    {{-- <div class="form-group">
      <label for="amount" style="font-size:20px;"><b>Reciept</label></b>
      <input value="{{$status->reciept}}"  type="file" class="form-control" id="amount"  placeholder="Enter the receipt" name="receipt">
     
    </div> --}}
    
    <div class="form-group">
      <label for="exampleFormControlSelect1">Example select</label>
      <select name="status" class="form-control" id="exampleFormControlSelect1">
        <option style="color: black" value="accepted" >Accepted</option>
        {{-- <option style="color: black" value="" >Delete</option> --}}
        {{-- <option style="color: black" value="confirm" >Confirm</option> --}}

      </select>
    </div>
     
    <button type="submit" class="button btn-submit">Submit</button>
     
    </div>
   
</form>   
<br> 
</body>
</html>
    
@endsection