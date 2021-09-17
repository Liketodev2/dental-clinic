@extends('dashboard.layouts.main')
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Create user</h5>
                        @include('dashboard.partials.errors')
                        @include('dashboard.partials.g-errors')
                        <div class="card-body border-top">
                            <form method="POST" action="{{route('dashboard.users.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label >Name</label>
                                    <input type="text" class="form-control form-control-sm" name="name" value="{{old('name')}}">
                                </div>
                                <div class="form-group">
                                    <label >Email</label>
                                    <input type="email" class="form-control form-control-sm" name="email" value="{{old('email')}}">
                                </div>
                                <div class="form-group">
                                    <label >Password</label>
                                    <input type="password" class="form-control form-control-sm" name="password">
                                </div>
                                <div class="form-group">
                                    <label >Role</label>
                                    <select class="form-control" name="role">
                                        <option {{old('role') == 'coordinator' ? 'selected' : '' }} value="coordinator">Coordinator</option>
                                        <option {{old('role') == 'accounting' ? 'selected' : '' }} value="accounting">Accounting</option>
                                        <option {{old('role') == 'dental_assistant' ? 'selected' : '' }} value="dental_assistant">Dental assistant</option>
                                        <option {{old('role') == 'travel_coordinator' ? 'selected' : '' }} value="travel_coordinator">Travel coordinator</option>
                                        <option {{old('role') == 'media_relations' ? 'selected' : '' }} value="media_relations">Media Relations</option>
                                        <option {{old('role') == 'operation_manager_and_doctor' ? 'selected' : '' }} value="operation_manager_and_doctor">Operation manager and Doctor</option>
                                    </select>
                                </div>
                                <button class="btn btn-sm btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
