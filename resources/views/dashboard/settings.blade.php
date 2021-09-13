@extends(\App\Http\Controllers\HelperController::getLayout())
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Settings</h5>
                        @include('dashboard.partials.errors')
                        @include('dashboard.partials.g-errors')
                        <div class="card-body border-top">
                            <form method="POST" action="{{route('main.settings_store')}}">
                                @csrf
                                <div class="form-group">
                                    <label >Name</label>
                                    <input type="text" class="form-control form-control-sm" name="name" value="{{$user->name}}">
                                </div>
                                <div class="form-group">
                                    <label >Email</label>
                                    <input type="email" class="form-control form-control-sm" name="email" value="{{$user->email}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label >Password</label>
                                    <input type="password" class="form-control form-control-sm" name="password">
                                </div>
                                <button class="btn btn-sm btn-secondary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
