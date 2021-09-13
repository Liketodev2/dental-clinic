@extends('dashboard.layouts.main')
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Users Table</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->role}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <form action="{{route('dashboard.user_log_in')}}" method="POST" class="d-inline-block">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{$item->id}}">
                                            <button class="btn btn-primary btn-sm "> <i class="fas fa-sign-in-alt text-white"></i></button>
                                        </form>
                                        <a href="{{route('dashboard.users.edit', $item->id)}}"><button class="btn btn-info btn-sm"><i class="fas fa-edit text-white"></i></button></a>
                                        <button class="btn btn-danger btn-sm admin-remove-btn"> <i class="fas fa-trash text-white"></i></button>
                                        <form action="{{route('dashboard.users.destroy', $item->id)}}" method="POST" class="d-none admin-remove-form">
                                            @method('DELETE')
                                            @csrf
                                        </form>
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
@endsection
