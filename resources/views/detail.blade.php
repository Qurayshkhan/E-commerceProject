@extends('master') @section('content')
<section class="main_heading my-5 pt-5">
    <div class="text-center">
        <h1 class="display-4">Deatils</h1>
        <hr class="w-25 mx-auto">
    </div>
    <div class="container-fluid">
        <div class="row gy-2 my-5">
            <div class="col-md-4 col-10 col-xxl-4 mx-auto">
                <figure>
                    <img src="{{$product['gallery']}}" class="img-fluid" alt="Gallery">
                </figure>
                <div class="row my-4">

                    <form action="/add_to_cart" method="POST">
                        @csrf
<input type="hidden" name="product_id" value="{{$product['id']}}">
<button type="" class="btn btn-primary" >Add to Cart</button>
                    </form>

                
                    <br><br>
                    <button class="btn btn-warning">Buy Now</button>
                </div>

            </div>
            <div class="col-md-4 col-10 col-xxl-4 mx-auto">
                <a href="/">Go Back</a>
                <h2>{{$product['name']}}</h2>
                <h3>Price:{{$product['price']}}</h2>
                    <h4>Category:{{$product['category']}}</h2>
                        <h4>Description:{{$product['description']}}</h2>
            </div>

        </div>
    </div>
    <hr>
</section>

@endsection