<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
  data-theme="theme-default" data-assets-path="{{ asset('admin/') }}/assets/" data-template="vertical-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>@yield('title')</title>
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="https://www.acma.in/img/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
    rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/fonts/flag-icons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/rtl/core.css"
    class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/rtl/theme-default.css"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/apex-charts/apex-charts.css" />
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/toastr/toastr.css" />
  <!---- DataTable css ---->
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-select-bs5/select.bootstrap5.css">
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-fixedcolumns-bs5/fixedcolumns.bootstrap5.css">
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/datatables-fixedheader-bs5/fixedheader.bootstrap5.css">


  <script src="{{ asset('admin/') }}/assets/vendor/js/helpers.js"></script>
  <script src="{{ asset('admin/') }}/assets/js/config.js"></script>

  @stack('styles')

</head>

<body>
<div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
      <x-admin.sidebar />
      <div class="layout-page">
       <x-admin.navbar />
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
                @yield('content')
          </div>
            <x-admin.footer />
          <div class="content-backdrop fade"></div>
        </div>
      </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
    <div>
        <div class="bs-toast toast toast-placement-ex m-2 fade  top-0 end-0 hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
            <div class="toast-header">
                <i class="bx bx-bell me-2"></i>
                <div class="me-auto fw-semibold" id="toastHead"></div>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="toastBody"></div>
        </div>
      </div>
</div>

  <script src="{{ asset('admin/') }}/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/popper/popper.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/js/bootstrap.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/hammer/hammer.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/i18n/i18n.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/js/menu.js"></script>


 <!--- Vendor -->
 <script src="{{ asset('admin/') }}/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <!-- Main JS -->
  <script src="{{ asset('admin/') }}/assets/js/main.js"></script>


  <!-- Page JS -->
  <script src="{{ asset('admin/') }}/assets/js/dashboards-analytics.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/toastr/toastr.js"></script>
  <script src="{{ asset('admin/') }}/assets/js/ui-toasts.js"></script>
  <script src="{{ asset('admin/') }}/assets/js/tables-datatables-extensions.js"></script>

  @stack('scripts')

    @if(session()->has('alert'))
        @php
            $alert = Session::get('alert');
            $toastHead = $alert['msg'];
            $toastBody = $alert['body'];
            $toastType = $alert['type'];
        @endphp
        <script>
            $(document).ready(function() {
                toast('{{ $toastHead }}','{{ $toastBody }}','{{ $toastType }}');
            });
        </script>
    @endif
<script>

$(document).ready(function () {
    $(document).on("click", ".menu-item", function () {
        // Remove 'active' class from all menu items
        $(".menu-item").removeClass("active");

        // Add 'active' class to the clicked menu item
        $(this).addClass("active");
    });
});

</script>

</body>

</html>