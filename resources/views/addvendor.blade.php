@extends('layout')
@section("content")
<div class=" custom-product">
    <div class="col-sm-10">
            <form action="/addvendor" method="POST">
            @csrf
            <div class="form-group">
                    <label for="exampleInputEmail1">Vendor Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Vendor Name">
                </div>
                <div class="form-group">
                    <label for="pwd">Status</label><br><br>
                    <input type="radio" value="avilable" name="status"><span>available</span><br><br>
                    <input type="radio" value="closed" name="status"><span>Closed</span><br><br>
                </div>
                <div class="form-group">
                    <label for="pwd">Category</label><br><br>
                    <input type="radio" value="attire"  name="product_category"><span>attire</span><br><br>
                    <input type="radio" value="makeup and hair"  name="product_category"><span>makeup and hair</span><br><br>
                    <input type="radio" value="decoration" name="product_category"><span>decoration</span><br><br>
                    <input type="radio" value="venue" name="product_category"><span>venue</span><br><br>
                    <input type="radio" value="category" name="product_category"><span>catering</span><br><br>
                    <input type="radio" value="bakery" name="product_category"><span>bakery</span><br><br>
                    <input type="radio" value="jewellery" name="product_category"><span>jewellery</span><br><br>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Location</label>
                    <input type="text" name="location" class="form-control" id="exampleInputEmail1" placeholder="location">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="address">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
            <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
