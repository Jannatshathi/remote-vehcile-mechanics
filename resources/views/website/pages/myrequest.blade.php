@extends('website.master')
@section('content')


  
<table class="table">
    <thead>
      <tr>
       
       
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Location</th>
        <th scope="col">Service</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach ($req as $key=>$item)
        <tr>
        
          
        <td>{{$item->name}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->location}}</td>
        <td>{{$item->service->name}}</td>
        {{-- <td>{{$item->status}}</td> --}}
        
          @if($item->status == "pending")
          <td>
            <a href="" class="btn btn-danger">Pending</a>
          
          </td>
          @elseif($item->status == "accepted")
          <td>
          {{-- <a href="" class="btn btn-danger">Completed</a> --}}
          <a href="" class="btn btn-primary">Accepted</a>
        </td>
        @else
        <td>
          <a href="" class="btn btn-success">Completed</a>

        </td>
          @endif
        
      </tr>
        @endforeach
     
    </tbody>
   
  </table>


    
@endsection