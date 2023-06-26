@extends('komponen/head')
@section('konten')

<body>
    <div class="catagories-side-menu">
        <!-- Close Icon -->
        <div id="sideMenuClose">
            <i class="ti-close"></i>
        </div>
        <!--  Side Nav  -->
        <div class="nav-side-menu">
            <div class="menu-list">
                <h6>Categories</h6>
                <ul id="menu-content" class="menu-content collapse out">
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#women" class="collapsed active">
                        <a href="#">Woman wear <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="women">
                            <li><a href="#">Midi Dresses</a></li>
                            <li><a href="#">Maxi Dresses</a></li>
                            <li><a href="#">Prom Dresses</a></li>
                            <li><a href="#">Little Black Dresses</a></li>
                            <li><a href="#">Mini Dresses</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#man" class="collapsed">
                        <a href="#">Man Wear <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="man">
                            <li><a href="#">Man Dresses</a></li>
                            <li><a href="#">Man Black Dresses</a></li>
                            <li><a href="#">Man Mini Dresses</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#kids" class="collapsed">
                        <a href="#">Children <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="kids">
                            <li><a href="#">Children Dresses</a></li>
                            <li><a href="#">Mini Dresses</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#bags" class="collapsed">
                        <a href="#">Bags &amp; Purses <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="bags">
                            <li><a href="#">Bags</a></li>
                            <li><a href="#">Purses</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#eyewear" class="collapsed">
                        <a href="#">Eyewear <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="eyewear">
                            <li><a href="#">Eyewear Style 1</a></li>
                            <li><a href="#">Eyewear Style 2</a></li>
                            <li><a href="#">Eyewear Style 3</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#footwear" class="collapsed">
                        <a href="#">Footwear <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="footwear">
                            <li><a href="#">Footwear 1</a></li>
                            <li><a href="#">Footwear 2</a></li>
                            <li><a href="#">Footwear 3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        @include('komponen/tophead')
        <!-- ****** Header Area End ****** -->

        <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area Start <<<<<<<<<<<<<<<<<<<< -->
        <div class="breadcumb_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">All Menu</a></li>
                            <li class="breadcrumb-item active">Keranjang</li>
                        </ol>
                        <!-- btn -->
                        <a href="#" class="backToHome d-block"><i class="fa fa-angle-double-left"></i> Kembali ke menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area End <<<<<<<<<<<<<<<<<<<< -->

        <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area Start >>>>>>>>>>>>>>>>>>>>>>>>> -->
        <section class="single_product_details_area section_padding_0_100">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">

                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url({{ asset('/gambarmenu/'.$data->gambar) }}); background-size: cover; background-position: center;"></li>
                                    {{-- <img src="{{ asset('/gambarmenu/'.$data->gambar) }}" alt=""> --}}
                                    </li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="{{ asset('/gambarmenu/'.$data->gambar) }}">
                                            <img class="d-block w-100" src="{{ asset('/gambarmenu/'.$data->gambar) }}" alt="First slide">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="single_product_desc">

                            <form method="POST" action="/keranjang/tambahitem">
                                @csrf
                                <h4 class="title">{{ $data->nama_menu }}</h4>
                                <h5 class="subtitle">{{ $data->harga }}</h5>
                                <div class="form-group">
                                    {{-- <label for="nama_menu">Nama Menu</label> --}}
                                    <input type="hidden" class="form-control col-md-2" id="id_menu" placeholder="Nama Menu" value="{{ $data->id }}" name="menu_id">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control input-number col-md-2" id="jumlah" placeholder="Jumlah" name="jumlah" value="1" min="1">
                                    </div>
                                </div>
                                        <input type="text" class="form-control input-number col-md-2" id="status" name="status" value="belum selesai" hidden>                                                                    
                                <div class="form-group">
                                    <label for="nomor_meja">Nomor Meja</label>
                                    <select class="form-control col-md-2" id="nomor_meja" name="nomor_meja">
                                        {{-- @foreach($meja as $item) --}}
                                        <option value="M1">M1</option>
                                        <option value="M2">M2</option>
                                        <option value="M3">M3</option>
                                        {{-- @endforeach --}}
                                    </select>
                                </div>
                                <button type="submit" name="addtocart" value="5" class="btn cart-submit d-block mr-2 mt-2">Tambah Ke Keranjang</button>
                                <!-- Add to Cart Form -->
                                <div class="cart clearfix mb-50 d-flex">
                                </div>
                            </form>
                        </div>

                        <!-- Add to Cart Form -->
                        {{-- <form class="cart clearfix mb-50 d-flex" method="post">
                                <div class="quantity">
                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <button type="submit" name="addtocart" value="5" class="btn cart-submit d-block">Add to cart</button>
                            </form> --}}

                        {{-- <div id="accordion" role="tablist">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h6 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Information</a>
                                        </h6>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
                                            <p>Approx length 66cm/26" (Based on a UK size 8 sample) Mixed fibres</p>
                                            <p>The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 5'8"</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Cart Details</a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quis in veritatis officia inventore, tempore provident dignissimos nemo, nulla quaerat. Quibusdam non, eos, voluptatem reprehenderit hic nam! Laboriosam, sapiente! Praesentium.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magnam laborum eaque.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">shipping &amp; Returns</a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quo sint repudiandae suscipit ab soluta delectus voluptate, vero vitae, tempore maxime rerum iste dolorem mollitia perferendis distinctio. Quibusdam laboriosam rerum distinctio. Repudiandae fugit odit, sequi id!</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae qui maxime consequatur laudantium temporibus ad et. A optio inventore deleniti ipsa.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                    </div>
                </div>
            </div>
    </div>
    </section>
    <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area End >>>>>>>>>>>>>>>>>>>>>>>>> -->

    <!-- ****** Quick View Modal Area Start ****** -->
    <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <div class="quickview_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="quickview_pro_img">
                                        <img src="img/product-img/product-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="quickview_pro_des">
                                        <h4 class="title">Boutique Silk Dress</h4>
                                        <div class="top_seller_product_rating mb-15">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <h5 class="price">$120.99 <span>$130</span></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                        <a href="#">View Full Product Details</a>
                                    </div>
                                    <!-- Add to Cart Form -->
                                    <form class="cart" method="post">
                                        <div class="quantity">
                                            <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                            <input type="number" class="qty-text" id="qty2" step="1" min="1" max="12" name="quantity" value="1">

                                            <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        </div>
                                        <button type="submit" name="addtocart" value="5" class="cart-submit">Add to cart</button>
                                        <!-- Wishlist -->
                                        <div class="modal_pro_wishlist">
                                            <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class="modal_pro_compare">
                                            <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                        </div>
                                    </form>

                                    <div class="share_wf mt-30">
                                        <p>Share With Friend</p>
                                        <div class="_icon">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Quick View Modal Area End ****** -->

    <section class="you_may_like_area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- <div class="section_heading text-center">
                        <h2>related Products</h2>
                    </div> -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="you_make_like_slider owl-carousel">

                        <!-- Single gallery Item -->
                        <div class="single_gallery_item">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/product-1.jpg" alt="">
                                <div class="product-quicview">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <h4 class="product-price">$39.90</h4>
                                <p>Jeans midi cocktail dress</p>
                                <!-- Add to Cart -->
                                <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                            </div>
                        </div>

                        <!-- Single gallery Item -->
                        <div class="single_gallery_item">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/product-2.jpg" alt="">
                                <div class="product-quicview">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <h4 class="product-price">$39.90</h4>
                                <p>Jeans midi cocktail dress</p>
                                <!-- Add to Cart -->
                                <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                            </div>
                        </div>

                        <!-- Single gallery Item -->
                        <div class="single_gallery_item">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/product-3.jpg" alt="">
                                <div class="product-quicview">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <h4 class="product-price">$39.90</h4>
                                <p>Jeans midi cocktail dress</p>
                                <!-- Add to Cart -->
                                <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                            </div>
                        </div>

                        <!-- Single gallery Item -->
                        <div class="single_gallery_item">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/product-4.jpg" alt="">
                                <div class="product-quicview">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <h4 class="product-price">$39.90</h4>
                                <p>Jeans midi cocktail dress</p>
                                <!-- Add to Cart -->
                                <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                            </div>
                        </div>

                        <!-- Single gallery Item -->
                        <div class="single_gallery_item">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/product-5.jpg" alt="">
                                <div class="product-quicview">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <h4 class="product-price">$39.90</h4>
                                <p>Jeans midi cocktail dress</p>
                                <!-- Add to Cart -->
                                <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ****** Footer Area Start ****** -->
    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <!-- Single Footer Area Start -->
                <!-- <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_footer_area">
                        <div class="footer-logo">
                            <img src="img/core-img/logo.png" alt="">
                        </div>
                        <div class="copywrite_text d-flex align-items-center">
                            <p>Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                                Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.</p>
                        </div>
                    </div>
                </div> -->
                <!-- Single Footer Area Start -->
                <!-- <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <div class="single_footer_area">
                        <ul class="footer_widget_menu">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div> -->
                <!-- Single Footer Area Start -->
                <!-- <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <div class="single_footer_area">
                        <ul class="footer_widget_menu">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Our Policies</a></li>
                            <li><a href="#">Afiliates</a></li>
                        </ul>
                    </div>
                </div> -->
                <!-- Single Footer Area Start -->
                <div class="col-12 col-lg-5">
                    <div class="single_footer_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribe to our newsletter</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your email here">
                                <button type="submit" class="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line"></div>

            <!-- Footer Bottom Area Start -->
            <div class="footer_bottom_area">
                <div class="row">
                    <div class="col-12">
                        <div class="footer_social_area text-center">
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    @endsection