<?php

namespace App\Http\Controllers\Dashboard\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware(['superAdmin']);
    }

    public function index(){

        $items = Contact::get();
        return view('dashboard.super_admin.index', compact('items'));
    }

}
