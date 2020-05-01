<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/endless/ltr/dashboard-ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 04:20:10 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="http://admin.pixelstrap.com/endless/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="http://admin.pixelstrap.com/endless/assets/images/favicon.png" type="image/x-icon">
    <title>{{ config('app.name', 'Fiscom') }} - @yield('title')</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/endless/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/endless/assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/endless/assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/endless/assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/endless/assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/endless/assets/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/endless/assets/css/prism.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/endless/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/endless/assets/css/style.css">
    <link id="color" rel="stylesheet" href="http://admin.pixelstrap.com/endless/assets/css/light-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/endless/assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader bg-white">
        <div class="whirly-loader"> </div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <!-- Page Header Start-->
      @include('includes.admin.topbar')
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        @include('includes.admin.sidebar')
        <!-- Page Sidebar Ends-->
        <!-- Right sidebar Start-->
        <div class="right-sidebar" id="right_side_bar">

        </div>
        <!-- Right sidebar Ends-->
        <div class="page-body">
          @yield('content')
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2018 © Endless All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="http://admin.pixelstrap.com/endless/assets/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="http://admin.pixelstrap.com/endless/assets/js/bootstrap/popper.min.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/bootstrap/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="http://admin.pixelstrap.com/endless/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="http://admin.pixelstrap.com/endless/assets/js/sidebar-menu.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="http://admin.pixelstrap.com/endless/assets/js/chart/morris-chart/raphael.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/chart/morris-chart/morris.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/chart/morris-chart/prettify.min.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/chart/chartjs/chart.min.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/chart/knob/knob.min.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/chart/knob/knob-chart.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/prism/prism.min.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/clipboard/clipboard.min.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/counter/counter-custom.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/custom-card/custom-card.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/dashboard/dashboard-ecommerce/chart.custom.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/dashboard/dashboard-ecommerce/morris-script.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/dashboard/dashboard-ecommerce/owl-carousel.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/typeahead/handlebars.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/typeahead/typeahead.custom.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/chat-menu.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/height-equal.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/tooltip-init.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/typeahead-search/handlebars.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/typeahead-search/typeahead-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="http://admin.pixelstrap.com/endless/assets/js/script.js"></script>
    <script src="http://admin.pixelstrap.com/endless/assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>

<!-- Mirrored from admin.pixelstrap.com/endless/ltr/dashboard-ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 04:20:10 GMT -->
</html>
