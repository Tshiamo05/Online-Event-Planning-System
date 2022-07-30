@extends('layout')
@section("content")
<div class="custom-product">
<div class="trending-wrapper">
<h3>Vendors</h3>
@foreach($vendors as $item)
<div class="trending-item">
     <a href="vendordetails/{{$item['id']}}">
      <div class="">
        <h3>{{$item['name']}}</h3>
        <h4>{{$item['product_category']}}</h4>
      </div>
      </a>
      </a>
      <a href="vendordetails/{{$item['id']}}">
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
<a class="btn btn-success" href="addvendor">Add New vendor</a><br><br>
<a class="btn btn-success" href="listvendor">Delete Vendor</a><br><br>

</div>
@endsection