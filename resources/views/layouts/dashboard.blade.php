<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard ecommerce - Vuexy - Bootstrap HTML admin template</title>


    <link rel="apple-touch-icon" href="/../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/../app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="/../app-assets/vendors/css/charts/apexcharts.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link href="{{ asset('app-assets/css/plugins/extensions/toastr.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/../app-assets/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/../app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/../app-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="/../app-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="/../app-assets/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/../app-assets/css-rtl/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/../app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/../app-assets/css-rtl/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="/../app-assets/css-rtl/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="/../app-assets/css-rtl/pages/card-analytics.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/../app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="/../assets/css/style-rtl.css">
    <!-- END: Custom CSS-->
    @toastr_css
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">

<!-- BEGIN: Header-->
@include('admin.includes.header')
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('admin.includes.main-menu')
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
@yield('content')


<!-- BEGIN: Footer-->
@include('admin.includes.footer')

<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="/../app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="/../app-assets/vendors/js/charts/apexcharts.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="/../app-assets/js/core/app-menu.js"></script>
<script src="/../app-assets/js/core/app.js"></script>
<script src="/../app-assets/js/scripts/components.js"></script>
<script src="{{asset('app-assets/js/scripts/extensions/toastr.js')}}"></script>

<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="/../app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>



<!-- END: Page JS-->

</body>
<!-- END: Body-->
@jquery
@toastr_js
@toastr_render

</html>
