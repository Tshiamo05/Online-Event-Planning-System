@extends('layout')
@section("content")
  <div align="center">
    <div class="rating-product">
      <form action="/rating" method="POST">
      @csrf
        <h3>Thank you for rating the product</h3>
        <div class="col-sm-12">
            <input class="star star-5" value="5" id="star-5" type="radio" name="rate"/>
            <label class="star star-5" for="star-5"></label>
            <input class="star star-4" value="4" id="star-4" type="radio" name="rate"/>
            <label class="star star-4" for="star-4"></label>
            <input class="star star-3" value="3" id="star-3" type="radio" name="rate"/>
            <label class="star star-3" for="star-3"></label>
            <input class="star star-2" value="2" id="star-2" type="radio" name="rate"/>
            <label class="star star-2" for="star-2"></label>
            <input class="star star-1" value="1" id="star-1" type="radio" name="rate"/>
            <label class="star star-1" for="star-1"></label>
           </div>
           <div class="form-group">
        <br><br>
          <textarea name="product_id" placeholder="Product id" class="form-control" id="email"></textarea>
        </div>
        <div class="form-group">
        <br><br>
          <textarea name="comment" placeholder="write your comment" class="form-control" id="email"></textarea>
        </div>
        
        <button class='btn btn-primary' type="submit">Update</button>
      </form>
    </div>
  </div>
@endsection