<?php


namespace App\Http\Controllers\Dashboard\TravelCoordinator;


use App\Http\Controllers\Controller;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index(){

        $items = Contact::get();
        return view('dashboard.travel_coordinator.index', compact('items'));
    }
}
