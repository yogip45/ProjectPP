<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BOSS ANGKRINGAN</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href={{ asset("/assets/vendors/mdi/css/materialdesignicons.min.css") }}>
  <link rel="stylesheet" href={{ asset("/assets/vendors/flag-icon-css/css/flag-icon.min.css") }}>
  <link rel="stylesheet" href={{ asset("/assets/vendors/css/vendor.bundle.base.css") }}>
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href={{ asset("/assets/css/style.css") }}>
  <!-- End layout styles -->
  <link rel="shortcut icon" href={{ asset("/assets/images/favicon.png") }} />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif

                <img src="../../assets/images/logo-dark.svg">
              </div>
              <h4>Hello! Selamat Datang</h4>
              <h6 class="font-weight-light">Masukan username dan password dengan benar</h6>
              <form class="pt-3" method="POST" action="/sesi/login">
                @csrf
                <div class="form-group">
                  <input value="{{ Session::get('email') }}" type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                {{-- <div class="mt-3">
                    <a type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="#">SIGN IN</a>
                  </div> --}}
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook mr-2"></i>Connect using facebook </button>
                </div>
                <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
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
  <!-- endinject -->
</body>

</html>