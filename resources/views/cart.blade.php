@extends('layouts.app')

@section('content')
    <!--======= SUB BANNER =========-->
    <section class="sub-bnr" data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container">
                <h4>SHOPPING CART</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                    Sed feugiat, tellus vel tristique posuere, diam</p>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">SHOP</a></li>
                    <li class="active">SHOPPING CART</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">

        <!--======= PAGES INNER =========-->
        <section class="padding-top-100 padding-bottom-100 pages-in chart-page">
            <div class="container">

                <!-- Payments Steps -->
                <div class="shopping-cart text-center">
                    <div class="cart-head">
                        <ul class="row">
                            <!-- PRODUCTS -->
                            <li class="col-sm-2 text-left">
                                <h6>PRODUCTS</h6>
                            </li>
                            <!-- NAME -->
                            <li class="col-sm-4 text-left">
                                <h6>NAME</h6>
                            </li>
                            <!-- PRICE -->
                            <li class="col-sm-2">
                                <h6>PRICE</h6>
                            </li>
                            <!-- QTY -->
                            <li class="col-sm-1">
                                <h6>QTY</h6>
                            </li>

                            <!-- TOTAL PRICE -->
                            <li class="col-sm-2">
                                <h6>TOTAL</h6>
                            </li>
                            <li class="col-sm-1"></li>
                        </ul>
                    </div>
                @php
                    $total=0;
                @endphp
                @if(isset($products))
                    @foreach($products as $prod)
                        @foreach($product_id as $prod_id)
                            @if($prod->id == $prod_id )
                                <!-- Cart Details -->
                                    <ul class="row cart-details">
                                        <li class="col-sm-6">
                                            <div class="media">
                                                <!-- Media Image -->
                                                <div class="media-left media-middle"><a href="#." class="item-img"> <img
                                                            class="media-object" src="images/{{$prod->image}}" alt="">
                                                    </a></div>

                                                <!-- Item Name -->
                                                <div class="media-body">
                                                    <div class="position-center-center">
                                                        <h5>{{$prod->name}}</h5>
                                                        <p>{{$prod->description}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- PRICE -->
                                        <li class="col-sm-2">
                                            <div class="position-center-center"><span class="price"><small>$</small>{{$prod->price}}</span>
                                            </div>
                                        </li>

                                        <!-- QTY -->
                                        <li class="col-sm-1">
                                            <div class="position-center-center">
                                                <div class="quinty">
                                                    <!-- QTY -->
                                                    <input type="number" disabled="true"
                                                           value="{{$product[$prod_id]}}"/>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- TOTAL PRICE -->
                                        <li class="col-sm-2">
                                            <div class="position-center-center"><span class="price"><small>$</small>{{$prod->price}}</span>
                                            </div>
                                        </li>

                                    @php
                                        $total = $total+ ($prod->price);

                                    @endphp
                                        <!-- REMOVE -->
                                        <li class="col-sm-1">
                                            <div class="position-center-center ">
                                                <form action="{{url('cart/destroy/'.$productid[$prod_id])}}"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class=" btn-danger">
                                                        <i class="fa fa-btn fa-trash"></i>Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                @endif

                            @endforeach
                        @endforeach
                    @endif

                </div>
            </div>
        </section>

        <!--======= PAGES INNER =========-->
        <section class="padding-top-100 padding-bottom-100 light-gray-bg shopping-cart small-cart">
            <div class="container">

                <!-- SHOPPING INFORMATION -->
                <div class="cart-ship-info margin-top-0">
                    <div class="row">

                        <!-- DISCOUNT CODE -->
                        <div class="col-sm-7">
                            <h6>DISCOUNT CODE</h6>
                            <form>
                                <input type="text" value="" placeholder="ENTER YOUR CODE IF YOU HAVE ONE">
                                <button type="submit" class="btn btn-small btn-dark">APPLY CODE</button>
                            </form>
                            <div class="coupn-btn"><a href="#." class="btn">continue shopping</a> <a href="#."
                                                                                                     class="btn">update
                                    cart</a></div>
                        </div>

                        <!-- SUB TOTAL -->
                        <div class="col-sm-5">
                            <h6>grand total</h6>
                            <div class="grand-total">
                                <div class="order-detail">
                                    @if(isset($products))
                                        @foreach($products as $prod)
                                            @foreach($product_id as $prod_id)
                                                @if($prod->id == $prod_id )
                                    <p>{{$prod->name}} <span>{{$prod->price}} </span></p>

                                            @endif

                                        @endforeach
                                    @endforeach
                                @endif

                                    <!-- SUB TOTAL -->
                                    <p class="all-total">TOTAL COST <span> {{$total}}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
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
