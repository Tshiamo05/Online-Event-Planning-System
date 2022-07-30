@extends('layout')
@section("content")
<div class="custom-product">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <h1>Update Checklist</h1>
            <form action="/editchecklist" method="POST">
            @csrf
            <div class="custom-product">
                    <div class="row">
                    <div class="col-lg-10">
                        <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" name="attire" value="done" aria-label="...">
                        </span>
                        <h3>Attire</h3>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-10">
                        <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" name="make_up" value="done" aria-label="...">
                        </span>
                        <h3>Make-up</h3>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-10">
                        <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" name="catering" value="done" aria-label="...">
                        </span>
                        <h3>Catering</h3>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-10">
                        <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" name="decoration" value="done" aria-label="...">
                        </span>
                        <h3>Decoration</h3>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-10">
                        <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" name="venue" value="done" aria-label="...">
                        </span>
                        <h3>Venue</h3>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-10">
                        <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" name="bakery" value="done" aria-label="...">
                        </span>
                        <h3>Bakery</h3>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-10">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="checkbox" name="jewellery" value="done" aria-label="...">
                            </span>
                            <h3>Jewellery</h3>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                    <button type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection