@extends('layout')
@section("content")
<div class="container">
   <div class="row">
      <div class="col-sm-6">
       <img class="detail-img" src="{{$product['gallery']}}" alt="">
      </div>
      <div class="col-sm-6">
        <a href="/">Go back</a>
        <h3>{{$product['category']}}</h3>
        <h2>{{$product['name']}}</h2>
        <h3>Price: {{$product['price']}}</h3>
        <h4>Details: {{$product['description']}}</h4>
        <h4>Vendor: {{$product['vendor']}}</h4>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <br><br>
        <form action="/add_to_cart" method="POST">
          @csrf
          <input type="hidden" name="product_id" value={{$product['id']}}>
          <button class="btn btn-primary">Add to Cart</button>
        </form>
        <br><br>
        <a href="/rating" class="btn btn-success">Rate Product</a>

        <br><br>
      </div>
   </div>

</div>
@endsection
