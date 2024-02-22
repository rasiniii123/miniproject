<!DOCTYPE html>
<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/item/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->




<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-ecommerce-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2024 01:35:17 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">

    <title>eCommerce - Dashboards | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>


    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/">


    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5DDHKGP');</script>
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/libs/quill/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/libs/quill/katex.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/libs/quill/editor.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/libs/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/libs/dropzone/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/libs/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/libs/tagify/tagify.css') }}" />


    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/css/pages/card-analytics.css') }}" />
</head>

<body>
    <main>
        @yield('content')
    </main>
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="{{ asset('vendor/libs/jquery/jquery.js') }}"></script>
  <script src="{{ asset('vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('vendor/libs/hammer/hammer.js') }}"></script>
  <script src="{{ asset('vendor/libs/i18n/i18n.js') }}"></script>
  <script src="{{ asset('vendor/libs/typeahead-js/typeahead.js') }}"></script>
  <script src="{{ asset('vendor/js/menu.js') }}"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{ asset('vendor/libs/apex-charts/apexcharts.js') }}"></script>
  <script src="{{ asset('vendor/libs/quill/katex.js') }}"></script>
  <script src="{{ asset('vendor/libs/quill/quill.js') }}"></script>
  <script src="{{ asset('vendor/libs/select2/select2.js') }}"></script>
  <script src="{{ asset('vendor/libs/dropzone/dropzone.js') }}"></script>
  <script src="{{ asset('vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
  <script src="{{ asset('vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script src="{{ asset('vendor/libs/tagify/tagify.js') }}"></script>


  <!-- Main JS -->
  <script src="{{ asset('js/main.js') }}"></script>


  <!-- Page JS -->

  </body>

  <script src="{{ asset('js/app-ecommerce-dashboard.js') }}"></script>
  @if (session('admin_success'))
  <script>
      Swal.fire({
          title: 'Login Berhasil',
          text: 'Selamat datang di halaman dashboard admin!',
          icon: 'success',
          confirmButtonText: 'Ok'
      });
  </script>
@endif
@yield('js')

<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-ecommerce-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2024 01:35:20 GMT -->
</html>

<!-- beautify ignore:end -->

