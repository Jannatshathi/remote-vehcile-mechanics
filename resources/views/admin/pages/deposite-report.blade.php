@extends('master')
@section('content')

<style>
  p{
    color: white;
  }
</style>
<div class="card">
  <div class="container">
    <p> Name: {{$deposite->users->name}}</p>
   <p>Email: {{$deposite->users->email}}</p>
   <p>Phone: {{$deposite->users->phone}}</p>
   <p>Address: {{$deposite->users->address}}</p>
   <p>Amount: {{$deposite->amount}}</p>
 
</div>
</div>

      <button type="submit" class="btn btn-primary btn-sm">Print</button>
    
 



  
@endsection