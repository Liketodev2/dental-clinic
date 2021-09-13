<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }

    public function settings(){

        $user = Auth::user();
        return view('dashboard.settings', compact('user'));
    }

    public function settings_store(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'password' => 'nullable|min:8',
        ]);

        $user = Auth::user();
        $user->update([
            'name' => $request->name,
        ]);

        if($request->password){
            $user->update([
                'password' => (new BcryptHasher())->make($request->get('password'))
            ]);
        }

        return redirect()->back()->with('success', 'User info is updated');
    }

    public function admin_back(){
        \Session::forget('adminAccess');
        $user = User::where('role', 'super_admin')->first();

        Auth::logout();
        Auth::loginUsingId($user->id);
        return redirect()->route('login');
    }
}
