@extends('master')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        
        <th scope="col">Remark</th>
        <th scope="col">Transaction Id</th>
        <th scope="col">Amount</th>
        <th scope="col">Reciept</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($deposite as $x) <!--mechanics as array-->
      <tr>
        <th scope="row">{{$x->id}}</th>
        
        <td>{{$x->remark}}</td>
        <td>{{$x->transactionid}}</td>
        <td>{{$x->amount}}</td>
        
        <td>
            <img src="{{url('/uploads/'.$x->image)}}"width="100px" alt="reciept">
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection