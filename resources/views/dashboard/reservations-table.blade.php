<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon.png"> --}}
    <link rel="shortcut icon" href="dashboard/images/logo.png" sizes="16x16" type="image/x-icon">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="dashboard/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dashboard/css/helper.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        @extends('dashboard/dashboard-master')
        @section('body')

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Start date</th>
                                                <th>End date</th>
                                                <th>Number of devices</th>
                                                <th>Number of gamepad</th>
                                                <th>Price</th>
                                                <th>Process</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($res as $Reservation)
                                            <tr>
                                                <td>{{$Reservation ->Reservation_id}}</td>
                                                <td>{{$Reservation ->Reservation_start}}</td>
                                                <td>{{$Reservation ->Reservation_end}}</td>
                                                <td>{{$Reservation ->number_of_devices}}</td>
                                                <td>{{$Reservation ->number_of_gamepad}}</td>
                                                <td>{{$Reservation ->Reservation_price}}</td>
                                                <td>
                                                    <a href="{{url('/Edite/appointment/'. $Reservation ->Reservation_id)}}" class="btn btn-outline-warning">Edit</a>
                                                    <a href="/reservationstable/delete/{{$Reservation ->Reservation_id}}" class="btn btn-outline-danger">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- All Jquery -->
                <script src="dashboard/js/lib/jquery/jquery.min.js"></script>
                <!-- Bootstrap tether Core JavaScript -->
                <script src="dashboard/js/lib/bootstrap/js/popper.min.js"></script>
                <script src="dashboard/js/lib/bootstrap/js/bootstrap.min.js"></script>
                <!-- slimscrollbar scrollbar JavaScript -->
                <script src="dashboard/js/jquery.slimscroll.js"></script>
                <!--Menu sidebar -->
                <script src="dashboard/js/sidebarmenu.js"></script>
                <!--stickey kit -->
                <script src="dashboard/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
                <!--Custom JavaScript -->
                <script src="dashboard/js/custom.min.js"></script>


                <script src="dashboard/js/lib/datatables/datatables.min.js"></script>
                <script src="dashboard/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
                <script src="dashboard/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
                <script src="dashboard/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
                <script src="dashboard/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
                <script src="dashboard/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
                <script src="dashboard/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
                <script src="dashboard/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
                <script src="dashboard/js/lib/datatables/datatables-init.js"></script>
                @endsection
</body>

</html>