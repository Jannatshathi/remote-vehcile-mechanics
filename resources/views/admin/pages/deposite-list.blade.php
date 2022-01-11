@extends('master')
@section('content')

<div id="printreciept">


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">User Id</th>
        <th scope="col">Remark</th>
        <th scope="col">Transaction Id</th>
        <th scope="col">Amount</th>
        <th scope="col">Reciept</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($deposite as $x) <!--mechanics as array-->
      <tr>
        <th scope="row">{{$x->id}}</th>
        <td>{{$x->user_id}}</td>
        <td>{{$x->remark}}</td>
        <td>{{$x->transaction_id}}</td>
        <td>{{$x->amount}}</td>
        
        <td>
            <img src="{{url('/uploads/'.$x->reciept)}}"width="100px" alt="reciept">
          </td>
          
          <td>
            @if($x->status == 0)
            <a href="{{route('admin.view.deposite',$x->id)}}" class="btn btn-danger">Pending</a>
            {{-- @elseif($x->status == 'confirm')
            <a href="{{route('admin.view.deposite',$x->id)}}" class="btn btn-success">confirmed</a> --}}
            
            @else
            <a href="" class="btn btn-info">Accepted</a>
            
            @endif
          </td>
    
          <td>
            @if($x->status == 0)
            <a href="{{route('admin.view.deposite',$x->id)}}" class="btn btn-primary">Accept</a>
            <a href="{{route('admin.delete.deposite',$x->id)}}" class="btn btn-success">Delete</a>
    
            {{-- @elseif($x->status == 'confirm') --}}
            
            @else
            {{-- <a href="{{route('admin.view.deposite',$x->id)}}" class="btn btn-danger">Confirmed</a> --}}

            <button class="btn btn-primary" type="submit" onClick="PrintDiv('printreciept');" value="Print">Print</button>
            
            @endif
          </td>
      </tr>
      @endforeach
    </tbody>
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