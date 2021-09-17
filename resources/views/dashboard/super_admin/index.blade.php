@extends('dashboard.layouts.main')
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Dashboard </h2>
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
                    <div class="col-12">
                        <div class="card">
                            <h5 class="card-header">Contact Messages</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">#</th>
                                            <th class="border-0">Image</th>
                                            <th class="border-0">Name</th>
                                            <th class="border-0">Email</th>
                                            <th class="border-0">Country</th>
                                            <th class="border-0">Phone</th>
                                            <th class="border-0">Whatsapp</th>
                                            <th class="border-0">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($items as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td><img class="img-thumbnail" style="object-fit: cover" width="150px" height="100px"   src="{{asset('uploads/contact/'.$item->image)}}" alt=""></td>
                                             {{--<td>
                                                    <div class="m-r-10"><img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                                </td>--}}
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->email}} </td>
                                                <td>{{$item->country}} </td>
                                                <td>{{$item->phone}}</td>
                                                <td>{{$item->whatsapp}}</td>
                                                <td>
                                                    <a href="{{route('dashboard.contact.show', $item->id)}}"><button class="btn btn-sm btn-info"><i class="fas fa-info text-white"></i></button></a>
                                                    <button class="btn btn-danger btn-sm admin-remove-btn"> <i class="fas fa-trash text-white"></i></button>
                                                    <form action="{{route('dashboard.contact.destroy', $item->id)}}" method="POST" class="d-none admin-remove-form">
                                                        @method('DELETE')
                                                        @csrf
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="9" ><a href="{{route('dashboard.contact.index')}}" class="btn btn-outline-light float-right mt-4 mb-2">View Details</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
