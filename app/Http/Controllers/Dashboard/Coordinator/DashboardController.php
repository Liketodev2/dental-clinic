<?php


namespace App\Http\Controllers\Dashboard\Coordinator;


use App\Http\Controllers\Controller;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index(){

        $items = Contact::get();
        return view('dashboard.coordinator.index', compact('items'));
    }
}
