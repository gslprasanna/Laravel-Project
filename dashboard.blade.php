@extends('layout')
@section('content')
 
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
   
</div>

<!-- Content Row -->


<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Welcome Admin
                    
                </h6>
                
            </div>
            <!-- Card Body -->
            <div class="card-body" >
               

                <img src="{{asset('public/img/s1.jpeg')}}" style="height: 550px;" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    
</div>

<!-- Content Row -->


</div>
<!-- /.container-fluid -->


<script src="{{asset('public')}}/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('public')}}/js/demo/chart-area-demo.js"></script>
<script src="{{asset('public')}}/js/demo/chart-pie-demo.js"></script>
@endsection