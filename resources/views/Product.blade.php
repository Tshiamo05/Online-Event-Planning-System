@extends('layout')
@section("content")
<div class="custom-product">
<div class="trending-wrapper">
<h3>Categories</h3>
@foreach($products as $item)
<div class="trending-item">
     <a href="detail/{{$item['id']}}">
      <img class="trending-image" src="{{$item['gallery']}}" alt="decor">
      <div class="">
        <h3>{{$item['name']}}</h3>
        <!--<p>{{$item['description']}}</p>-->

      </div>
      </a>
      <a href="detail/{{$item['id']}}">
      <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </a>
    </div>
    @endforeach
  </div>
</div>
<a class="btn btn-success" href="addnewproduct">Add New Product</a><br><br>
<a class="btn btn-success" href="listproducts">List Products</a><br><br>
<a class="btn btn-success" href="vendorlist">All vendors</a><br><br>
<a class="btn btn-success" href="listvendor">All adm vendors</a><br><br>

</div>
@endsection