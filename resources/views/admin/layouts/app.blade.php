
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Plateforme</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/font-awesome/css/font-awesome.css')}}" />
    <!-- endinject -->
    <!-- plugin css for this page -->

    <link rel="stylesheet" href="{{asset('node_modules/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/icheck/skins/all.css')}}" />
    <link rel="stylesheet" href="{{asset('node_modules/select2/dist/css/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('node_modules/select2/dist/css/select2-bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('node_modules/select2-bootstrap-theme/dist/select2-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" />
    <link rel="stylesheet" href="{{asset('node_modules/dropify/dist/css/dropify.min.css')}}" />
    <link rel="stylesheet" href="{{asset('node_modules/datepicker/css/jquery.datetimepicker.min.css')}}">

    <link rel="stylesheet" href="{{asset('node_modules/bootstrap-selectpicker/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/bootstrap-selectpicker/css/select2-bootstrap.min.css')}}">

    <link href="{{asset('node_modules/fileUpload/themes/explorer-fa/theme.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset('node_modules/fileUpload/css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('node_modules/jstree/dist/themes/default/style.min.css')}}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('victory_admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('victory_admin/css/custom.css')}}">

    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('css/mine_css.css')}}">
    
</head>
    <body class="sidebar-dark sidebar-fixed">
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('admin.layouts.header')
    <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="row row-offcanvas row-offcanvas-right">
            @include('admin.layouts.aside')
            <!-- partial -->
                <div class="content-wrapper">
                    @yield('content_sign')
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row-offcanvas ends -->
        </div>
        @include('admin.layouts.footer')
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->

     <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{asset('node_modules/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('node_modules/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('node_modules/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('node_modules/morris.js/morris.min.js')}}"></script>
    <script src="{{asset('node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('node_modules/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('node_modules/typeahead.js/dist/typeahead.bundle.min.js')}}"></script>
    <script src="{{asset('node_modules/select2/dist/js/select2.min.js')}}"></script>

    <script src="{{asset('node_modules/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{asset('node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>

    <script src="{{asset('node_modules/datatables.net/js/dataTables.checkboxes.js')}}"></script>

    <script src="{{asset('node_modules/datepicker/js/jquery.datetimepicker.full.js')}}"></script>
    <script src="{{asset('node_modules/datepicker/js/jquery.datetimepicker.full.min.js')}}"></script>
    <script src="{{asset('node_modules/datepicker/js/jquery.datetimepicker.js')}}"></script>
    <script src="{{asset('node_modules/moment/moment.js')}}"></script>

    <script src="{{asset('node_modules/chart.js/dist/Chart.min.js')}}"></script>

    <script src="{{asset('node_modules/jstree/dist/jstree.min.js')}}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('victory_admin/js/off-canvas.js')}}"></script>
    <script src="{{asset('victory_admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('victory_admin/js/misc.js')}}"></script>
    <script src="{{asset('victory_admin/js/settings.js')}}"></script>
    <script src="{{asset('victory_admin/js/todolist.js')}}"></script>
    <script src="{{asset('victory_admin/js/select2.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('victory_admin/js/dashboard.js')}}"></script>
    <script src="{{asset('victory_admin/js/chart.js')}}"></script>

    <script src="{{asset('victory_admin/js/bt-maxLength.js')}}"></script>
    <!-- End plugin js for this page-->

    <!-- End custom js for this page-->
    </body>
</html>



