@extends('master')
@section('content')
<div id="printreciept">
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

     
      <button style="float: right;" class="btn btn-primary" type="submit" onClick="PrintDiv('printreciept');" value="Print">Print</button>
 </div>
 <script language="javascript">
  function PrintDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
  }
  </script>


  
@endsection