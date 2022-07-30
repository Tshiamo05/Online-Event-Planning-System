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
            </div>
        @endforeach
    </div>

</div>
@endsection
@if(Session::has('user'))
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
               <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="/logout">Logout</a></li>
                <li><a href="/addnewproduct">Add New Product</a></li>
                <li><a href="/addvendor">Add New Vendor</a></li>

                </ul>
            </li>
            @else
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
            @endif
