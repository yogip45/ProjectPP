<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BOSS ANGKRINGAN</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <!-- <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../assets/images/logo.svg" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a> -->
        <p>BOSS ANGKRINGAN</p>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field d-none d-xl-block">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                <i class="input-group-text border-0 mdi mdi-magnify"></i>
              </div>
              <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
            </div>
          </form>
        </div>       
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      @include('/dashboard/sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Cetak Struk </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pesanan Selesai</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            {{-- Modal coyy                            --}}
            <div class="col-lg-12 grid-margin stretch-card">

              <div class="card">
                <div class="card-body">                  
                  @php
                      $no = 1;
                  @endphp
                  <!-- Modal -->
                  @include('/dashboard/tambahmenu')
                  {{-- <p class="card-description"> Add class <code>.table-bordered</code>                    
                    </p> --}}                                      
                      <div class="form-group">
                          <label for="menu">Pilih Meja :</label>
                          <select class="form-control col-md-2" id="no_meja" name="no_meja">
                              <option value="M1">M1</option>
                              <option value="M2">M2</option>
                              <option value="M3">M3</option>
                          </select>
                      </div>                      
                      <a href="" target="_blank" onclick="this.href='/struk/' + document.getElementById('no_meja').value" class="btn btn-primary">Cetak</a>                 
                
                </div>
              </div>
            </div>                       
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->       
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src={{ asset("/assets/vendors/js/vendor.bundle.base.js") }}></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src={{ asset("/assets/js/off-canvas.js") }}></script>
  <script src={{ asset("/assets/js/hoverable-collapse.js") }}></script>
  <script src={{ asset("/assets/js/misc.js") }}></script>
  <script src={{ asset("/assets/js/file-upload.js") }}></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <!-- End custom js for this page -->
</body>

</html>