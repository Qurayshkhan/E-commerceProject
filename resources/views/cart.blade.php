@extends('master')
@section('content')
    

<div class="container">
    <h1 class="text-center">Cart</h1>
    <h3 class="text-info">Result for Cart</h3>
    <a href="ordernow"><button class="btn btn-success">Order Now</button></a>
</div>
<hr>
<div class="container">
    @foreach ($product as $item)
    <div class="row">
        <div class="col-sm-3 mt-3">
            <a href="/detail{{$item->id}}">
                
               <img src="{{$item->gallery}}" alt="" height="100px" width="100px">
            </a>
            <h4>{{$item->name}}</h4>
            <p>{{$item->description}}</p>
            <hr>
        </div>
        <div class="col-sm-3 mt-3">
            <a href="/removecart/{{$item->cart_id}}">  <button class="btn btn-danger" >Remove to Cart</button></a>
          
        </div>
    </div>
    @endforeach
    
</div>
@endsection
