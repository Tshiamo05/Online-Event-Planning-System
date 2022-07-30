@extends('layout')
@section("content")
<div class="custom-addproduct">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">

            <form action="addnewproduct" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Product Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="pwd">Category</label><br><br>
                    <input type="radio" value="attire"  name="vendor_category"><span>attire</span><br><br>
                    <input type="radio" value="makeup and hair"  name="vendor_category"><span>makeup and hair</span><br><br>
                    <input type="radio" value="decoration" name="vendor_category"><span>decoration</span><br><br>
                    <input type="radio" value="venue" name="vendor_category"><span>venue</span><br><br>
                    <input type="radio" value="category" name="vendor_category"><span>catering</span><br><br>
                    <input type="radio" value="bakery" name="vendor_category"><span>bakery</span><br><br>
                    <input type="radio" value="jewellery" name="vendor_category"><span>jewellery</span><br><br>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Description">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Vendor</label>
                    <input type="text" name="vendor" class="form-control" id="exampleInputEmail1" placeholder="vendor">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="text" name="gallery" class="form-control" id="exampleInputEmail1" placeholder="gallery">
                </div>
                <h3>NB: write image part like /path/nameofimage.jpg</h3>
                <button type="submit" class="btn btn-default">submit</button>
            </form>

        </div>
    </div>
</div>
@endsection