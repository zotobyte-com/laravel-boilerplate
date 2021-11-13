<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('backend')}}/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{asset('backend')}}/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('backend')}}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('backend')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{asset('backend')}}/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('backend')}}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('backend')}}/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('lifeline.png')}}" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
   @include('layouts.partials._navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
{{--       @include('layouts.partials._settings-panel')--}}
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
            @include('layouts.partials._sidebar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <p><strong>Opps Something went wrong</strong></p>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
           @yield('content')
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
{{--            <footer class="footer">--}}
{{--                <div class="d-sm-flex justify-content-center justify-content-sm-between">--}}
{{--                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>--}}
{{--                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>--}}
{{--                </div>--}}
{{--            </footer>--}}
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{asset('backend')}}/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('backend')}}/vendors/chart.js/Chart.min.js"></script>
<script src="{{asset('backend')}}/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="{{asset('backend')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="{{asset('backend')}}/js/dataTables.select.min.js"></script>

<script src="{{asset('backend')}}/vendors/typeahead.js/typeahead.bundle.min.js"></script>
<script src="{{asset('backend')}}/vendors/select2/select2.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('backend')}}/js/off-canvas.js"></script>
<script src="{{asset('backend')}}/js/hoverable-collapse.js"></script>
<script src="{{asset('backend')}}/js/template.js"></script>
<script src="{{asset('backend')}}/js/settings.js"></script>
<script src="{{asset('backend')}}/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('backend')}}/js/dashboard.js"></script>
<script src="{{asset('backend')}}/js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->
<!-- Custom js for this page-->
<script src="{{asset('backend')}}/js/file-upload.js"></script>
<script src="{{asset('backend')}}/js/typeahead.js"></script>
<script src="{{asset('backend')}}/js/select2.js"></script>

<script>
    $(document).ready(function (){

        $('.filter-form input').on('change',function (){
            $('.filter-form').submit();
        });

    });
</script>

@stack('script')

</body>

</html>

