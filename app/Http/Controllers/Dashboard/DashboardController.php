<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','dashboard']);
    }

    public function index(){

        $items = Contact::get();
        return view('dashboard.index', compact('items'));
    }

}
