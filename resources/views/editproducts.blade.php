@extends('adlayouts.admin')
@section("content")
<h1>Update Product</h1>
<form action="/editproducts" method="POST">
@csrf
<input type="hidden" name="id" value="{{$data['id']}}">
<input type="text" name="name" value="{{$data['name']}}"><br><br>
<input type="text" name="price" value="{{$data['price']}}"><br><br>
<input type="text" name="vendor_id" value="{{$data['vendor_id']}}"><br><br>
<input type="text" name="vendor_category" value="{{$data['vendor_category']}}"><br><br>
<input type="text" name="description" value="{{$data['description']}}"><br><br>
<input type="text" name="vendor" value="{{$data['vendor']}}"><br><br>
<input type="text" name="gallery" value="{{$data['gallery']}}"><br><br>
<button type="submit">Update</button>
</form>
@endsection
