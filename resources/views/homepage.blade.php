@extends('layout')
@section("content")
<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
            <img class="slider-img" src="/image/img_evenning-gown.jpg" alt="Chania">
            <div class="carousel-caption slider-text">
                <h3>Attire</h3>
                <p>we have designers for you</p>
            </div>
        </div>

        <div class="item" >
            <img class="slider-img" src="/image/img_decor.jpg" alt="Chicago">
            <div class="carousel-caption slider-text">
                <h3>Decorations</h3>
                <p>We decorate anywhere, venues are also available</p>
            </div>
        </div>

        <div class="item">
            <img  class="slider-img" src="/image/img_jewelery.jpg" alt="New York">
            <div class="carousel-caption slider-text">
                <h3>Jewellery</h3>
                <p>Love jewellery, we got you.</p>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>



    <div class="trending-wrapper">
        <div class="cate">Categories</div>
        <nav class="side">
            <ul>
                <li><a href="/product">All products</a></li>
                <li>   <a href="/vendorlist">All vendors</a></li>
                <li> <a  href="addnewproduct">Add New Product</a></li>
                <li> <a  href="listproducts">List admin Products</a></li>
                <li> <a  href="listvendor">All adinm vendors</a></li>
            </ul>
        </nav>
        <article>
        <div class="trending-item">
                <div class="col-sm-10">
                    <h2>Attire</h2>
                    <a href="/product">
                    <img class="trending-image" src="/image/img_evenning-gown.jpg" alt="decor">
                    </a>
                     <h4>in need of a wedding dress, suit,cocktail dress or even gowns?
                    </h4>
                </div>

            </div>
            <div class="trending-item">


                <div class="col-sm-10">
                    <h2>Decorations</h2>
                    <a href="/product">
                    <img class="trending-image" src="/image/img_decor.jpg" alt="decor">
                    </a>
                    <h4>Have a beautyful event. They do decorations of your
                        choice where ever you want in Gaborone. </h4>
                </div>
            </div>
            <div class="trending-item">
                <div class="col-sm-10">
                    <h2>Jewellery</h2>
                    <a href="/product">
                    <img class="trending-image" src="/image/img_jewelery.jpg" alt="decor">
                    </a>
                    <h4>Visit them for rings, necklaces, bracelates of gold and silver.
                        They can design any of your choice.</h4>
                </div>
            </div>
            


                
            <div class="trending-item">

                <div class="col-sm-10">
                    <h2>Makeup and hair</h2>
                    <a href="/product">
                    <img class="trending-image" src="/image/img_make-up.jpg" alt="decor">
                    </a>
                    <h4>Makeup artists and hairstylists are available. they do bridal hairstyles,
                         party styles or any hairstyle of choice,
                         bridal makeup, natural makeup and so forth.</h4>
                </div>

            </div>
            <div class="trending-item">
                <div class="col-sm-10">
                    <h2>Catering</h2>
                    <a href="/product">
                    <img class="trending-image" src="/image/img_appetizers.jpg" alt="decor">
                    </a>
                    <h4>Choose what your guest will have and they will make it possible.
                        They provide food, appitizers, drinks and snacks for different events</h4>
                </div>
            </div>
            <div class="trending-item">
                <div class="col-sm-10">
                    <h2>Venues</h2>
                    <a href="/product">
                    <img class="trending-image" src="/image/img_venue.jpg" alt="decor">
                    </a>
                    <h4>Book your venue of choose well in time. There are outdoor gardens
                    ,parks and halls in different places in all over Gaborone.</h4>
                </div>

            </div>
        </article>
    </div>
    
</div>
@endsection
