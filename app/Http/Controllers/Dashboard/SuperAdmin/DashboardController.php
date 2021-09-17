<?php

namespace App\Http\Controllers\Dashboard\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HelperController;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware(['superAdmin']);
    }

    public function index(){

        $items = Contact::orderBy('created_at', 'desc')->limit(6)->get();

        return view('dashboard.super_admin.index', compact('items'));
    }

    public function user_log_in(Request $request){

        $user_id = $request->user_id;
        Auth::logout();
        Auth::loginUsingId($user_id);

        \Session::put('adminAccess', 1);

        return redirect()->route('login');
    }


}
