<?php


namespace App\Http\Controllers\Dashboard\DentalAssistant;


use App\Http\Controllers\Controller;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index(){

        $items = Contact::get();
        return view('dashboard.dental_assistant.index', compact('items'));
    }
}
