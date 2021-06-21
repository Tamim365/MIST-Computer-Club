@extends('dashboard.master')
@section('header')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection

@section('content')
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Dashboard</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>


                </div>
            </div>
            <!-- end row --





         END container-fluid -->

         <div>
            <img src="{{ URL::asset('mcc_logo.png') }}" alt="" style="max-width: 70% ; max-height:70%">
         </div>
    </div>
    <!-- END content -->

</div>
@endsection

@section('js')
<script src="assets/plugins/chart.js/Chart.min.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>

<!-- Counter-Up-->
<script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

<!-- dataTabled data -->
<script src="assets/data/data_datatables.js"></script>

<!-- Charts data -->
<script src="assets/data/data_charts_dashboard.js"></script>
<script>
    $(document).on('ready', function() {
        // data-tables
        $('#dataTable').DataTable({
            data: dataSet,
            columns: [{
                title: "Name"
            }, {
                title: "Position"
            }, {
                title: "Office"
            }, {
                title: "Extn."
            }, {
                title: "Date"
            }, {
                title: "Salary"
            }]
        });

        // counter-up
        $('.counter').counterUp({
            delay: 10,
            time: 600
        });
    });
</script>
@endsection
