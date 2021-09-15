<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('dashboard/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dashboard/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <title>Dental Clinic</title>
</head>

<body>
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="/">Dental Clinic</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    {{--       <li class="nav-item">
                               <div id="custom-search" class="top-search-bar">
                                   <input class="form-control" type="text" placeholder="Search..">
                               </div>
                           </li>--}}
                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('dashboard/assets/images/avatar-1.jpg')}}" alt="" class="user-avatar-md rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name">Admin </h5>
                            </div>
                            {{-- <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>--}}
                            <a class="dropdown-item" href="{{route('main.settings')}}"><i class="fas fa-cog mr-2"></i>Setting</a>
                            <a class="dropdown-item" href="#"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="{{route('coordinator.index')}}"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                        </li>
                        @if(\Session::get('adminAccess') && \Session::get('adminAccess') == 1)
                            <form action="{{route('main.admin_back')}}" method="POST" class="d-inline-block">
                                @csrf
                                <button class="btn btn-sm btn-primary mt-4">Back to super admin</button>
                            </form>
                        @endif
                        {{--     <li class="nav-item ">
                                 <a class="nav-link active" href="{{route('dashboard.users.index')}}"><i class="fa fa-fw fa-users"></i>Users</a>
                             </li>--}}
                        {{--       <li class="nav-item ">
                                   <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-user"></i>Users</a>
                                   <div id="submenu-4" class="collapse submenu" style="">
                                       <ul class="nav flex-column">
                                           <li class="nav-item">
                                               <a class="nav-link" href="{{route('dashboard.users.index')}}">List</a>
                                           </li>
                                           <li class="nav-item">
                                               <a class="nav-link" href="{{route('dashboard.users.create')}}">Create</a>
                                           </li>
                                       </ul>
                                   </div>
                               </li>--}}
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
    @yield('content')
    <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div>
                        Copyright © 2021 Concept. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="{{asset('dashboard/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
<!-- bootstap bundle js -->
<script src="{{asset('dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<!-- slimscroll js -->
<script src="{{asset('dashboard/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
<!-- main js -->
<script src="{{asset('dashboard/assets/libs/js/main-js.js')}}"></script>
<!-- chart chartist js -->
<script src="{{asset('dashboard/assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
<!-- sparkline js -->
<script src="{{asset('dashboard/assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
<!-- morris js -->
<script src="{{asset('dashboard/assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
<script src="{{asset('dashboard/assets/vendor/charts/morris-bundle/morris.js')}}"></script>
<!-- chart c3 js -->
<script src="{{asset('dashboard/assets/vendor/charts/c3charts/c3.min.js')}}"></script>
<script src="{{asset('dashboard/assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
<script src="{{asset('dashboard/assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
<script src="{{asset('dashboard/assets/libs/js/dashboard-ecommerce.js')}}"></script>
<script src="{{asset('js/admin.js')}}"></script>
</body>

</html>

