@extends('website.master')
@section('content')

@if(session()->has('success'))
    <p class="alert alert-success">
      {{session()->get('success')}}
    </p>
    @endif



    <h1><b>Deposite</b></h1>
   

    
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

    <form action="{{route('admin.deposite.store',$dep->id)}}" method="POST" >
     
      @csrf
      @method("PATCH")
      
        <div class="form-group">
          <label for="name" style="font-size:20px;"><b>Remark</label></b>
          <input type="text" class="form-control" id="name"  value="{{$dep->remark}}" name="remark">
          </div>

          <div class="form-group">
            <label for="name" style="font-size:20px;"><b>Transaction Id</label></b>
            <input type="number" class="form-control" id="name"  value="{{$dep->transaction_id}}" name="transaction_id">
            </div>

        

        <div class="form-group">
          <label for="amount" style="font-size:20px;"><b>Amount</label></b>
          <input type="number" class="form-control" id="amount"  value="{{$dep->amount}}" name="amount">
         
        </div>

        <div class="form-group">
          <label for="method" style="font-size:20px;"><b>Payment Method</label></b>
          <input type="text" class="form-control" id="method"  value="{{$dep->payment_method}}" name="payment_method  ">
         
        </div>
        
     <br><br>
     <div style="margin-top: 5px;">
      <button type="submit" class="btn btn-success">Submit</button>
     </div>
    
     
   
</form>   

</div>
    
@endsection