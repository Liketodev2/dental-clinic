<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{

   public function index(){

       return view('index');
   }

    public function contact(){

        return view('contact');
    }

    public function our_mission(){

        return view('our_mission');
    }

    public function about(){
        return view('about');
    }

    public function services(){

        return view('services.services');
    }

    public function service_page(){

        return view('services.service_page');
    }

    public function shop_listing(){

        return view('services.shop_listing');
    }

    public function prices(){

        return view('services.prices');
    }

    public function why_dr_brenes(){
        return view('dr_brenes.why_dr_brenes');
    }

    public function brenes_gallery_simple(){
        return view('dr_brenes.gallery_simple');
    }

    public function brenes_gallery(){
        return view('dr_brenes.gallery');
    }

    public function our_specialist(){
        return view('specialists.our_specialist');
    }

    public function doctor_page(){
        return view('specialists.doctor_page');
    }

    public function schedule(){
        return view('specialists.schedule');
    }

    public function testimonials(){
        return view('testimonials');
    }

    public function blog(){
        return view('md_in_office.blog');
    }

    public function blog_grid(){
        return view('md_in_office.blog_grid');
    }

    public function blog_post_page(){
        return view('md_in_office.blog_post_page');
    }

    public function contactForm(Request $request){

    $this->validate($request, [
        'name'  => ['required'],
        'email' => ['required'],
        'phone' => ['required'],
        'message' => ['required'],
    ]);

      $contact = new Contact();
      $contact->fill($request->all());
      $contact->save();

    }




}
