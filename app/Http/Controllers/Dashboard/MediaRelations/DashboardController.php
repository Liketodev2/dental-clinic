<?php


namespace App\Http\Controllers\Dashboard\MediaRelations;


use App\Http\Controllers\Controller;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index(){

        $items = Contact::get();
        return view('dashboard.media_relations.index', compact('items'));
    }
}
