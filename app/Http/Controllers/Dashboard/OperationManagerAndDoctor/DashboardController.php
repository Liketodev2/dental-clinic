<?php


namespace App\Http\Controllers\Dashboard\OperationManagerAndDoctor;


use App\Http\Controllers\Controller;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index(){

        $items = Contact::get();
        return view('dashboard.operation_manager_and_doctor.index', compact('items'));
    }
}
