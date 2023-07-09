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
            <!-- <div class="menu-list"> -->
            <!-- <h6>Categories</h6> -->
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

        {{-- <section class="top-discount-area d-md-flex align-items-center">
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>Free Shipping &amp; Returns</h5>
                <h6><a href="#">BUY NOW</a></h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>20% Discount for all dresses</h5>
                <h6>USE CODE: Colorlib</h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>20% Discount for students</h5>
                <h6>USE CODE: Colorlib</h6>
            </div>
        </section> --}}

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
                                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
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

        <section class="shop_grid_area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="shop_sidebar_area">

                            <div class="widget catagory mb-50">
                                <!--  Side Nav  -->
                                <div class="nav-side-menu">
                                    <form action="/pesanan/simpan" method="post">
                                        @csrf
                                        <div class="row">
                                            {{-- <div class="col-md-10 mb-3">
                                                <select class="form-control" name="nomor_meja" id="nomor_meja" required>
                                                    <option value="">Pilih Nomor Meja</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>                                                  
                                                </select>
                                            </div> --}}
                                            <div class="col-12 mb-3">
                                                {{-- <a href="{{ route('tampil.menu') }}"> --}}                                                    
                                                    <a href="#" class="btn karl-checkout-btn col-md-7 mb-2" onclick="window.location.reload()">Refresh Status</a>
                                                </a>
                                                {{-- </a> --}}
                                            </div>
                                        </div>                                        
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="shop_grid_product_area">
                            <div class="row">
                                {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Tambah Ke Keranjang</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form class="forms-sample" method="POST" action="/insertmenu" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                              <label for="exampleInputUsername1">Nama Menu</label>
                                              <input type="text" class="form-control" id="nama_menu" placeholder="nama menu" name="nama_menu" value="">
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Jumlah </label>
                                              <input type="text" class="form-control" id="harga" placeholder="harga" name="jumlah" value="0">
                                            </div>
                                            <div class="form-group">
                                              <label for="nomor_meja">Nomor Meja </label>
                                              <select class="form-control mb-2" name="nomor_meja" id="nomor_meja" required>
                                                <option value="">Pilih Nomor Meja</option>
                                                <option value="">A1</option>
                                                <option value="">A2</option>
                                                <option value="">A3</option>
                                                <option value="">A4</option>
                                                <option value="">A5</option>
                                                {{-- @foreach ($mejas as $nomorMeja)
                                                  <option value="{{ $nomorMeja }}">{{ $nomorMeja }}</option>
                                @endforeach --}}
                                {{-- </select> --}}
                                {{-- </div> --}}
                                {{-- <button type="submit" class="btn btn-primary mr-2">Tambah</button> --}}
                                {{-- <button type="submit" class="btn karl-checkout-btn col-md-7 mb-2">Tambah</button> --}}
                                {{-- <button class="btn btn-light">Cancel</button> --}}
                                {{-- </form> --}}
                                {{-- </div> --}}
                                {{-- <div class="modal-footer">         --}}
                                {{-- </div> --}}
                                {{-- </div> --}}
                                {{-- </div> --}}
                                {{-- </div> -- --}}
                                <!-- Single gallery Item -->
                                {{-- @foreach ($order as $pesanan) --}}
                                <div class="col-12" data-wow-delay="0.2s">
                                    <table class="table table-bordered">                    
                                        @if ($message = Session::get('success'))
                                            <div class="alert alert-primary" role="alert">
                                                {{ $message }}
                                            </div>
                                        @endif
                                        <thead>
                                            <tr>
                                                <th> # </th>
                                                <th>Nama Menu</th>
                                                <th>Meja</th>
                                                <th>Jumlah</th>
                                                <th>Total Harga</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 0;
                                            @endphp
                                            @foreach ($order as $pesanan)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="word-break: break-all;">{{ $pesanan->menu->nama_menu }}</td>
                                                <td>{{ $pesanan->nomor_meja }}</td>
                                                <td>{{ $pesanan->jumlah }}</td>
                                                <td>{{ $pesanan->jumlah * $pesanan->menu->harga }}</td>
                                                <td>
                                                  @if ($pesanan->status == 'selesai')
                                                  <span class="text-success">{{ $pesanan->status }}</span>
                                                  @else
                                                  <span class="text-danger">{{ $pesanan->status }}</span>
                                                  @endif
                                                </td>
                                                <td class="text-center">
                                                  <div class="d-flex justify-content-center">
                                                    <a href="/deletepesanan/{{ $pesanan->id }}" class="btn btn-danger ml-2" name="hapus">Hapus</a>
                                                  </div>
                                              </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                        {{-- @endforeach --}}
                                        </form>
                                    </div>
                                </div>

                                <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination pagination-sm">
                                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                                        </ul>
                                    </nav>
                                </div>

                            </div>
                        </div>
                    </div>
        </section>

        <!-- ****** Footer Area Start ****** -->
        <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <img src="../../../connect-plus-1.0.0/background.jpeg" alt="">
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
    {{-- <script>
    function addToCart(menuId) {
    var quantity = document.getElementById("menu_id_" + menuId).value;
    var id = menuId;
    var quantity = document.getElementById("jumlah_");
    // Lakukan pengiriman data ke backend atau manipulasi data sesuai kebutuhan Anda
    console.log("Menu ID: " + menuId + ", Quantity: " + quantity);
    //ajax
    $.ajax({
        url: '/order/add',
        method: 'POST',
        data: {
            menu_id: id,
            jumlah: quantity
        },
        success: function(response) {
            // Tangani respon dari backend jika diperlukan
            console.log(response);
        },
        error: function(xhr, status, error) {
            // Tangani kesalahan jika terjadi
            console.log(xhr.responseText);
        }
    });
}
</script> --}}

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