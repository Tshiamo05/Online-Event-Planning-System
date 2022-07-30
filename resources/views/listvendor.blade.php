@extends('layout')
@section("content")
<main style="margin-top: 58px">
 <div class="container pt-4">
<div class="custom-product">
<h1>Vendor List</h1>

<table border="1">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Status</th>
    <th>Product_Category</th>
    <th>Location</th>
    <th>Email</th>
    <th>Address</th>
    <th>Operation</th>
</tr>
@foreach ($vendors as $item)
<tr>
    <td>{{$item ['id']}}</td>
    <td>{{$item ['name']}}</td>
    <td>{{$item ['status']}}</td>
    <td>{{$item ['product_Category']}}</td>
    <td>{{$item ['location']}}</td>
    <td>{{$item ['email']}}</td>
    <td>{{$item ['address']}}</td>
    <td>
    <a href={{"deleteP/".$item['id']}}>Delete</a>
    <a href={{"editP/".$item['id']}}>Edit</a>
    </td>
</tr>
@endforeach
</table>
</div>
</div>
</main>
@endsection
