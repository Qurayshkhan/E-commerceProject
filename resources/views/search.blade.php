@extends('master')
@section('content')
    

<section class="main_heading my-5 pt-5">
    <div class="text-center">
        <h1 class="display-4">Search Results</h1>
        <hr class="w-25 mx-auto">
    </div>
    <div class="container-fluid">
        <div class="row gy-2 my-5">
            @foreach ($product as $item)
                
            <div class="col-md-12 col-12 col-xxl-12 mx-auto">
                <figure>
                    <img src="{{$item['gallery']}}" class="img-fluid" alt="Gallery">
                </figure>
                <button class="btn btn-primary">Add to Cart</button>
                <button class="btn btn-warning">Buy Now</button>
            </div>
            <div class="col-md-12 col-12 col-xxl-12 mx-auto">
                <a href="/">Go Back</a>
                <h2>{{$item['name']}}</h2>
                <h3>Price:{{$item['price']}}</h2>
                    <h4>Category:{{$item['category']}}</h2>
                        <h4>Description:{{$item['description']}}</h2>
                        </div>
                 
                    </div>
                
                </div>

                @endforeach
                <hr>
</section>

@endsection