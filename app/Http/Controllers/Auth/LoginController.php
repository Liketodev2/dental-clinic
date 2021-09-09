<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'dashboard/index';
    protected function redirectTo(){

        $role = Auth::user()->role;

        switch ($role) {
            case 'super_admin':
                return route('dashboard.index');
                break;
            case 'coordinator':
                return route('coordinator.index');
                break;
            case 'accounting':
                return route('accounting.index');
                break;
            case 'dental_assistant':
                return route('dental_assistant.index');
                break;
            case 'travel_coordinator':
                return route('travel_coordinator.index');
                break;
            case 'media_relations':
                return route('media_relations.index');
                break;
            case 'operation_manager_and_doctor':
                return route('operation_manager_and_doctor.index');
                break;
            default:
                return route('index');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
