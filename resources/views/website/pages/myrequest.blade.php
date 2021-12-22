@extends('website.master')
@section('content')


  
<table class="table">
    <thead>
      <tr>
       
        <th scope="col">#</th>
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
        
          <td>{{$key+1}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->location}}</td>
        <td>{{$item->service}}</td>
        {{-- <td>{{$item->status}}</td> --}}
        
          @if($item->status == 0)
          <td>
            <a href="" class="btn btn-danger">Pending</a>
          
          </td>
          @elseif($item->status == 1)
          <td>
          {{-- <a href="" class="btn btn-danger">Completed</a> --}}
          <a href="{{route('admin.view.request',$item->id)}}" class="btn btn-primary">Accepted</a>
        </td>
        @else
        <td>
          <a href="{{route('admin.view.request',$item->id)}}" class="btn btn-success">Confirmed</a>

        </td>
          @endif
        
      </tr>
        @endforeach
     
    </tbody>
   
  </table>


    
@endsection