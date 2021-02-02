@extends('layouts.app')

@section('content')
    <!--======= SUB BANNER =========-->
    <section class="sub-bnr" data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container">
                <h4>ISLEEM SENTER</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                    Sed feugiat, tellus vel tristique posuere, diam</p>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Data</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">

        <!-- Popular Products -->
        <section class="shop-page padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="item-display">
                    <div class="row">
                        <div class="col-xs-6"> <span class="product-num">Showing 1 - 10 of 30 products</span> </div>

                        <!-- Products Select -->

                    </div>
                </div>

                <!-- Popular Item Slide -->
                <div class="papular-block row">
                @foreach($products as $product)
                    <!-- Item -->
                    <div class="col-md-3">
                        <div class="item">
                            <!-- Item img -->

                            <div class="item-img">  <img class="img-1" src="/images/{{$product->image}}" alt=""> <img class="img-2" src="/images/{{$product->image}}" alt="">
                                <!-- Overlay -->
                                <div class="overlay">
                                    <div class="position-center-center">
                                        <div class="inn"><a  href="/images/{{$product->image}}" data-lighter><i class="icon-magnifier"></i></a> <a  href="/product/{{$product->id}}"><i class="icon-basket"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"> <a href="/product/{{$product->id}}">{{$product->name}}</a>
                                <p>{{$product->description}}</p>
                            </div>

                            <!-- Price -->
                            <span class="price"><small>$</small>{{$product->price}}</span>
                        </div>
                    </div>

                 @endforeach
                </div>
            </div>
        </section>

        <!-- About -->
        <section class="small-about padding-top-150 padding-bottom-150">
            <div class="container">

                <!-- Main Heading -->
                <div class="heading text-center">
                    <h4>about PAVSHOP</h4>
                    <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odio luctus non. Nulla lacinia,
                        eros vel fermentum consectetur, risus purus tempc, et iaculis odio dolor in ex. </p>
                </div>

                <!-- Social Icons -->
                <ul class="social_icons">
                    <li><a href="#."><i class="icon-social-facebook"></i></a></li>
                    <li><a href="#."><i class="icon-social-twitter"></i></a></li>
                    <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
                    <li><a href="#."><i class="icon-social-youtube"></i></a></li>
                    <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
                </ul>
            </div>
        </section>

        <!-- News Letter -->
        <section class="news-letter padding-top-150 padding-bottom-150">
            <div class="container">
                <div class="heading light-head text-center margin-bottom-30">
                    <h4>NEWSLETTER</h4>
                    <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odi </span> </div>
                <form>
                    <input type="email" placeholder="Enter your email address" required>
                    <button type="submit">SEND ME</button>
                </form>
            </div>
        </section>
    </div>
@endsection
