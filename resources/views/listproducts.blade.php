@extends('layout')
@section("content")
<main style="margin-top: 58px">
        <div class="container pt-4">
<div class="custom-product">
<h1>Products List</h1>
<table border="1">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Vendor_Category</th>
    <th>Description</th>
    <th>Vendor</th>
    <th>gallery</th>
    <th>Operation</th>
</tr>
@foreach ($products as $item)
<tr>
    <td>{{$item ['id']}}</td>
    <td>{{$item ['name']}}</td>
    <td>{{$item ['price']}}</td>
    <td>{{$item ['vendor_Category']}}</td>
    <td>{{$item ['description']}}</td>
    <td>{{$item ['vendor']}}</td>
    <td>{{$item ['gallery']}}</td>
    <td>
    <a href={{"delete/".$item['id']}}>Delete</a>
    <a href={{"edit/".$item['id']}}>Edit</a>
    </td>
</tr>
@endforeach
</table>
</div>
</div>
</main>
@endsection
