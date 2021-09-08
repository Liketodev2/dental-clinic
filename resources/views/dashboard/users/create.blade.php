@extends('dashboard.layouts.main')
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Create user</h5>
                        <div class="card-body border-top">
                            <form>
                                <div class="form-group">
                                    <label >Email</label>
                                    <input type="text" class="form-control form-control-sm" name="email">
                                </div>
                                <div class="form-group">
                                    <label >Password</label>
                                    <input type="password" class="form-control form-control-sm" name="password">
                                </div>
                                <div class="form-group">
                                    <label >Role</label>
                                    <select class="form-control">
                                        <option value="coordinator">Coordinator</option>
                                        <option value="accounting">Accounting</option>
                                        <option value="dental_assistant">Dental assistant</option>
                                        <option value="travel_coordinator">Travel coordinator</option>
                                        <option value="media_relations">Media Relations</option>
                                        <option value="operation_manager_and_doctor">Operation manager and Doctor</option>
                                    </select>
                                </div>
                                <button class="btn btn-sm btn-secondary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
