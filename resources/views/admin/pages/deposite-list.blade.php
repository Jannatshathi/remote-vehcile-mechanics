@extends('master')
@section('content')




<div id="printreciept">


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="" >User Id</th>
        <th scope="col">Remark</th>
        <th scope="col">Transaction Id</th>
        <th scope="col">Amount</th>
        <th scope="col">Deposite Report</th>
        {{-- <th scope="col">Reciept</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th> --}}
        
      </tr>
    </thead>
    <tbody>
      @foreach($deposite as $x) <!--mechanics as array-->
      <tr>
        <th scope="row">{{$x->id}}</th>
        <td>{{$x->users->name}}</td>
        <td>{{$x->remark}}</td>
        <td>{{$x->transaction_id}}</td>
        <td>{{$x->amount}}</td>
        <td>
          <a href="{{route('admin.report.deposite',$x->id)}}" class="btn btn-primary">View</a>
        </td>
            
           
          </td>
      </tr>
      @endforeach
    </tbody>

    <button style="float: right;" class="btn btn-primary" type="submit" onClick="PrintDiv('printreciept');" value="Print">Print</button>
  </table>
</div>

  @endsection
  <script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
    </script>