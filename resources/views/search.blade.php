@extends('layout')
@section("content")
<div class=" custom-product">
  <div class=col-sm-4>
      <a href="#">Filter</a>

  </div>
  <div class="col-sm-4">
  <div class="trending-wrapper">
          <h3>Result for products</h3>
    @foreach($products as $item)
       <div class="search-item">
          <a href="detail/{{$item['id']}}">
                <img class="trending-image" src="{{$item['gallery']}}" alt="decor">
              <div class="">
                   <h3>{{$item['name']}}</h3>
                   <h5>{{$item['description']}}</h5>
                </div>
            </a>
        </div>
    @endforeach
  </div>
  </div>
</div>
@endsection