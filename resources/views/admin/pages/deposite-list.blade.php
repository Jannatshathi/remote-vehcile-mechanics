@extends('master')
@section('content')







<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col" >Mechanics Name</th>
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

    
  </table>
</div>

  @endsection
  