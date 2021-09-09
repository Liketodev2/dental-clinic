@extends('dashboard.layouts.accounting')
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Accounting </h2>
                     {{--   <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                                </ol>
                            </nav>
                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="ecommerce-widget">
                <div class="row">
                    <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Contact Messages</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">#</th>
                                            <th class="border-0">Name</th>
                                            <th class="border-0">Email</th>
                                            <th class="border-0">Phone</th>
                                            <th class="border-0">Message</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($items as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                             {{--   <td>
                                                    <div class="m-r-10"><img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                                </td>--}}
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->email}} </td>
                                                <td>{{$item->phone}}</td>
                                                <td>{{$item->message}}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Information</h5>
                            {{--<div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table no-wrap p-table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">Campaign</th>
                                            <th class="border-0">Visits</th>
                                            <th class="border-0">Revenue</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Campaign#1</td>
                                            <td>98,789 </td>
                                            <td>$4563</td>
                                        </tr>
                                        <tr>
                                            <td>Campaign#2</td>
                                            <td>2,789 </td>
                                            <td>$325</td>
                                        </tr>
                                        <tr>
                                            <td>Campaign#3</td>
                                            <td>1,459 </td>
                                            <td>$225</td>
                                        </tr>
                                        <tr>
                                            <td>Campaign#4</td>
                                            <td>5,035 </td>
                                            <td>$856</td>
                                        </tr>
                                        <tr>
                                            <td>Campaign#5</td>
                                            <td>10,000 </td>
                                            <td>$1000</td>
                                        </tr>
                                        <tr>
                                            <td>Campaign#5</td>
                                            <td>10,000 </td>
                                            <td>$1000</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <a href="#" class="btn btn-outline-light float-right">Details</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
