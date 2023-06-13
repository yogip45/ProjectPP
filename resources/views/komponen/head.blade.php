<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head
      
      any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Bos Angkringan</title>

    <!-- Favicon  -->
    <link rel="icon" href={{ asset("img/core-img/favicon.ico") }}>
    {{-- Custom css --}}
    <style>
      .product-img {
          position: relative;
          width: 100%;
          height: 0;
          padding-bottom: 100%; /* Untuk membuat gambar memiliki aspek rasio 1:1 */
      }
  
      .product-img img {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          object-fit: cover; /* Untuk mengatur gambar agar sesuai dengan ukuran container */
      }
  
      .product-quicview {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
      }
  </style>
  
    <!-- Core Style CSS -->
    <link rel="stylesheet" href={{ asset("css/core-style.css") }}>
    <link rel="stylesheet" href={{ asset("style.css") }}>

    <!-- Responsive CSS -->
    <link href={{ asset("css/responsive.css") }} rel="stylesheet">
</head>
<body>
  @yield('konten')
</body>
</html>