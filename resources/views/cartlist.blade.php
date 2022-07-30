    @extends('layout')
    @section("content")
    <div class=" custom-product">
    <div class="col-sm-10">
    <div class="trending-wrapper">
            <h3>Result for products</h3>
            <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
        @foreach($products as $item)
        <div class="row search-item cart-list-divider">
            <div class="col-sm-4">
            <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}" alt="decor">
                </a>
            </div>
            <div class="col-sm-4">
            <a href="detail/{{$item->id}}">
                <div class="">
                    <h3>{{$item->name}}</h3>
                    <h5>{{$item->description}}</h5>
                    <h2>P {{$item->price}}</h2>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to cart</a>
            </div>
            </div>
        @endforeach
    </div>
    <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
    </div>
    </div>
    @endsection