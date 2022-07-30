@extends('layout')
@section("content")
<div class="container">
   <div class="row">
      <div class="col-sm-6">
        <a href="/">Go back</a>
        <h3>Category: {{$vendor['category']}}</h3>
        <h2>Name: {{$vendor['name']}}</h2>
        <h3>Price: {{$vendor['status']}}</h3>
        <h4>Details: {{$vendor['location']}}</h4>
        <h4>Vendor: {{$vendor['email']}}</h4>
        <h4>Vendor: {{$vendor['address']}}</h4>
        <a href="vendordetails/{{$vendor['id']}}">
      <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </a>
      <br><br>
      </div>
   </div>

</div>
@endsection