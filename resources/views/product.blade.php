@extends('layouts.app')

@section('content')
    <!--======= SUB BANNER =========-->
    <section class="sub-bnr" data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container">
                <h4>{{$product->name}}</h4>
                <p>{{$product->description}}</p>
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
        <section class="padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- SHOP DETAIL -->
                <div class="shop-detail">
                    <div class="row">

                        <!-- Popular Images Slider -->
                        <div class="col-md-7">

                            <!-- Images Slider -->
                            <div class="images-slider">
                                <ul class="slides">

                                    <li data-thumb="/images/{{$product->image}}"><img class="img-responsive"
                                                                                      src="/images/{{$product->image}}"
                                                                                      alt=""></li>
                                </ul>
                            </div>
                        </div>

                        <!-- COntent -->
                        <div class="col-md-5">
                            <h4>w{{$product->name}}</h4>
                            <span class="price"><small>$</small>{{$product->price}}</span>

                            <!-- Sale Tags -->
                            <div class="on-sale"> 10% <span>OFF</span></div>
                            <ul class="item-owner">
                                <li>Size :<span> {{$product->size}}</span></li>
                                <li>Category:<span> {{$product->categories}}</span></li>

                            </ul>

                            <!-- Item Detail -->
                            <p> {{$product->description}}</p>

                            <!-- Short By -->
                            <div class="some-info">
                                <form action="{{url('add-to-cart/'.$product->id)}}" method="POST" class="form-horizontal">
                                @csrf
                                <!-- Task Name -->
                                    <ul class="row margin-top-30">

                                        <!-- ADD TO CART -->
                                        <li class="col-xs-6"><input class="btn btn-default" type="submit"
                                                                    value="ADD TO CART"></li>
                                        <!-- LIKE -->
                                        <li class="col-xs-6"><a href="#." class="like-us"><i class="icon-heart"></i></a>
                                        </li>
                                    </ul>
                                    <h6>
                                        <div class="quinty">
                                            <!-- QTY -->
                                            <select class="selectpicker" name="quantity">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                        <br>
                                        <br>
                                    </h6>
                                </form>

                                <!-- INFOMATION -->

                            <div class="inner-info">
                                    <h6>SHIPPING & RETURNS</h6>
                                    <h6>SHARE THIS PRODUCT</h6>

                                    <!-- Social Icons -->
                                    <ul class="social_icons">
                                        <li><a href="#."><i class="icon-social-facebook"></i></a></li>
                                        <li><a href="#."><i class="icon-social-twitter"></i></a></li>
                                        <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
                                        <li><a href="#."><i class="icon-social-youtube"></i></a></li>
                                        <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--======= PRODUCT DESCRIPTION =========-->

            </div>
        </section>

        <!-- Popular Products -->
        <section class="light-gray-bg padding-top-150 padding-bottom-150">
            <div class="container">

                <!-- Main Heading -->
                <div class="heading text-center">
                    <h4>YOU MAY LIKE IT</h4>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
          Sed feugiat, tellus vel tristique posuere, diam</span></div>

                <!-- Popular Item Slide -->
                <div class="papular-block block-slide">

                    <!-- Item -->

                    @foreach($products as $product)
                        <div class="item">
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
                    <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu
                        posuere odio luctus non. Nulla lacinia,
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
                    <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odi </span>
                </div>
                <form>
                    <input type="email" placeholder="Enter your email address" required>
                    <button type="submit">SEND ME</button>
                </form>
            </div>
        </section>
    </div>

@endsection
