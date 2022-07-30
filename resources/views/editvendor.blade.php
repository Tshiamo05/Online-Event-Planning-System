@extends('adlayouts.admin')
@section("content")
<h1>Update Vendor</h1>
<form action="/editvendor" method="POST">
@csrf
<input type="hidden" name="id" value="{{$data['id']}}">
<input type="text" name="name" value="{{$data['name']}}"><br><br>
<input type="text" name="user_id" value="{{$data['user_id']}}"><br><br>
<input type="text" name="status" value="{{$data['status']}}"><br><br>
<input type="text" name="product_category" value="{{$data['product_category']}}"><br><br>
<input type="text" name="location" value="{{$data['location']}}"><br><br>
<input type="text" name="email" value="{{$data['email']}}"><br><br>
<input type="text" name="address" value="{{$data['address']}}"><br><br>
<button type="submit">Update</button>
</form>
@endsection
