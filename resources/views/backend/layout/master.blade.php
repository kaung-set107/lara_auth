



<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>Admin Panel</title>
        <!-- plugins:css -->
        <link
            rel="stylesheet"
            href="backend/vendors/mdi/css/materialdesignicons.min.css"
        />
        <link
            rel="stylesheet"
            href="backend/vendors/base/vendor.bundle.base.css"
        />
        <!-- endinject -->
        <!-- plugin css for this page -->
        <link
            rel="stylesheet"
            href="backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css"
        />
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}" />
        <!-- endinject -->
        <link rel="shortcut icon" href="backend/images/favicon.png" />
    </head>
    <body>
        <!-- partial:partials/_header.html -->
        @include('backend.layout.header')]
        <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                    @include('backend.layout.sidebar')
                <!-- partial -->
                <div class="main-panel">
                    @yield('content')
                    
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div
                            class="d-sm-flex justify-content-center justify-content-sm-between"
                        >
                            <span
                                class="text-muted text-center text-sm-left d-block d-sm-inline-block"
                                >Copyright ©
                                
                                2021</span
                            >
                            <span
                                class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
                                >
                            
                                Developed by <a href="https://github.com/Davinci-20">Kaung Set Hein.</a> </span
                            >
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="backend/vendors/base/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <script src="backend/vendors/chart.js/Chart.min.js"></script>
        <script src="backend/vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="backend/js/off-canvas.js"></script>
        <script src="backend/js/hoverable-collapse.js"></script>
        <script src="backend/js/template.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="backend/js/dashboard.js"></script>
        <script src="backend/js/data-table.js"></script>
        <script src="backend/js/jquery.dataTables.js"></script>
        <script src="backend/js/dataTables.bootstrap4.js"></script>
        <!-- End custom js for this page-->

        <script
            src="backend/js/jquery.cookie.js"
            type="text/javascript"
        ></script>
    </body>
</html>
