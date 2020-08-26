<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gramos - Admin Dashboard</title>

    <!-- begin::global styles -->
    <link rel="stylesheet" href="/assets/vendors/bundle.css" type="text/css">
    <!-- end::global styles -->

    <!-- begin::datepicker -->
    <link rel="stylesheet" href="/assets/vendors/datepicker/daterangepicker.css">
    <!-- begin::datepicker -->

    <!-- begin::vmap -->
    <link rel="stylesheet" href="/assets/vendors/vmap/jqvmap.min.css">
    <!-- begin::vmap -->

    <!-- begin::custom styles -->
    <link rel="stylesheet" href="/assets/css/app.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/custom.css" type="text/css">
    <!-- end::custom styles -->

</head>
<body>

<!-- begin::page loader-->
<div class="page-loader">
    <div class="spinner-border"></div>
    <span>Tunggu Sebentar akhi ...</span>
</div>
<!-- end::page loader -->

<!-- begin::sidebar -->
@include('layouts.includes.sidebar')
<!-- end::sidebar -->

<!-- begin::side menu -->
<div class="side-menu">
    <div class='side-menu-body'>
        <ul>
            <li class="side-menu-divider">Navigation</li>
            <li class="open">
                <a href="#"><i class="icon ti-home"></i> <span>Dashboards</span> </a>
                <ul>
                    <li><a class="active" href="dashboard-one.html">Santri</a></li>
                    <li><a href="dashboard-two.html">Website Statistics</a></li>
                    <li><a href="dashboard-three.html">Alternative</a></li>
                </ul>
            </li>
            <li><a href="widgets.html"><i class="icon ti-paint-bucket"></i> <span>Widgets</span> <span
                    class="badge bg-danger-gradient">8+</span> </a></li>
            <li>
                <a data-attr="layout-builder-toggle" href="#">
                    <i class="icon ti-layout"></i>
                    <span>Layouts</span>
                </a>
                <ul>
                    <li>
                        <a href="#">Menu</a>
                        <ul>
                            <li><a href="layout-horizontal-menu.html">Horizontal</a></li>
                            <li><a href="layout-icon-menu.html">Icon</a></li>
                            <li><a href="layout-dark-menu.html">Dark</a></li>
                            <li><a href="layout-hidden-menu.html">Hidden</a></li>
                        </ul>
                    </li>
                    <li><a href="layout-container.html">Container</a></li>
                    <li><a href="layout-dark.html">Dark</a></li>
                    <li>
                        <a href="#">Other</a>
                        <ul>
                            <li><a href="layout-1.html">Layout 1</a></li>
                            <li><a href="layout-2.html">Layout 2</a></li>
                            <li><a href="layout-3.html">Layout 3</a></li>
                            <li><a href="layout-4.html">Layout 4</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- end::side menu -->

<!-- begin::navbar -->
@include('layouts.includes.navbar')
<!-- end::navbar -->

<!-- begin::main content -->
@yield('content')
<!-- end::main content -->

<!-- begin::global scripts -->
<script src="/assets/vendors/bundle.js"></script>
<!-- end::global scripts -->

<!-- begin::charts -->
<script src="/assets/vendors/charts/chartjs/chart.min.js"></script>
<script src="/assets/vendors/charts/peity/jquery.peity.min.js"></script>
<script src="/assets/js/examples/charts/chartjs.js"></script>
<script src="/assets/js/examples/charts/peity.js"></script>
<!-- end::charts -->

<!-- begin::daterangepicker -->
<script src="/assets/vendors/datepicker/daterangepicker.js"></script>
<!-- end::daterangepicker -->

<!-- begin::dashboard -->
<script src="/assets/js/examples/dashboard.js"></script>
<!-- end::dashboard -->

<!-- begin::vamp -->
<script src="/assets/vendors/vmap/jquery.vmap.min.js"></script>
<script src="/assets/vendors/vmap/maps/jquery.vmap.usa.js"></script>
<script src="/assets/js/examples/vmap.js"></script>
<!-- end::vamp -->

<!-- begin::custom scripts -->
<script src="/assets/js/custom.js"></script>
<script src="/assets/js/app.min.js"></script>
<!-- end::custom scripts -->

</body>
</html>