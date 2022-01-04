@extends('master')
@section('content')
    <hr>
<div class="container mt-3">
    <h1 class="text-center">Hi !{{Session::get('user')['name']}} Ready for Payment</h1>
    <hr>

    <table class="table table-striped table-hover">
        <thead>
          <tr>
         
            <th scope="col">Amount</th>
            <th scope="col">Text</th>
            <th scope="col">Delivery</th>
            <th scope="col">Total Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{$total}}</th>
            <td>Rs 0</td>
            <td>Rs 100</td>
            <td>{{$total+100}}</td>
          </tr>
       
        </tbody>
      </table>
</div>

<div class="container">

<form action="/orderplace" method="POST">
    @csrf
    <div class="form-group">
        <label for="Address">Enter Your Address</label>
        <textarea class="form-control" rows="2" name="address" placeholder="Adress Here"></textarea>
    </div>
    <h4>Chose Your Payment Method</h4>
        <div class="form-group">
<input type="radio" value="cash" name="payment"> <span> Cash On Delivery</span>
            <br>
            <input type="radio" value="cash" name="payment"> <span>Online Payment</span>
        </div>
      <button type="submit" class="btn btn-success">Order Now</button>
      
      
    </form>
</div>

@endsection
<br>