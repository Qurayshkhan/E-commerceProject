@extends('master')
@section('content')
    

<div class="container">
   
    <h3 class="text-info">My Orders</h3>
   
</div>
<hr>
<div class="container">
    @foreach ($orders as $item)
    <div class="row">
        <div class="col-sm-3 mt-3">
            <a href="/detail{{$item->id}}">
                
               <img src="{{$item->gallery}}" alt="" height="100px" width="100px">
            </a>
            
            <h5>Product Name:{{$item->name}}</h4>
            <p>Product Description: <strong>{{$item->description}}</strong></p>
            <p>Product Address: <strong>{{$item->address}}</strong></p>
            <p>Product Status: <strong>{{$item->status}}</strong></p>
            <p>Product Payment Method: <strong>{{$item->payment_method}}</strong></p>
            <p>Product Status: <strong>{{$item->payment_status}}</strong></p>
            
            <hr>
        </div>
        <div class="col-sm-3 mt-3">
           
          
        </div>
    </div>
    @endforeach
    
</div>
@endsection
