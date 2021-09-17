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



 /*       $this->validate($request, [
            'name'  => ['required'],
            'email' => ['required'],
            'country' => ['required'],
            'phone' => ['required'],
            'whatsapp' => ['required'],
            'image' => ['required'],
        ]);*/

        $file = $request->file('file');
        $file_name = uniqid(rand(), true).'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/contact'), $file_name);

        $file_modal = $request->file('modal_files');
        $file_modal_name = uniqid(rand(), true).'.'.$file->getClientOriginalExtension();
        $file_modal->move(public_path('/uploads/contact'),$file_modal_name);


      $additional['modal_files'] = $file_modal_name;
      $additional['health'] = $request['health'];
      $additional['teeth'] = $request['teeth'];
      $additional['suggest'] = $request['suggest'];
      $additional['age'] = $request['age'];

      $additional['radio-group1'] = $request['radio-group1'];
      $additional['radio-group2'] = $request['radio-group2'];
      $additional['radio-group3'] = $request['radio-group3'];
      $additional['radio-group4'] = $request['radio-group4'];
      $additional['radio-group5'] = $request['radio-group5'];
      $additional['radio-group6'] = $request['radio-group6'];
      $additional['radio-group7'] = $request['radio-group7'];
      $additional['date_teeth'] = $request['date_teeth'];

      $additional['additional_name'] = $request['additional_name'];
      $additional['additional_email'] = $request['additional_email'];
      $additional['additional_age'] = $request['additional_age'];

      $contact = new Contact();

      $contact->create([
          'name' => $request['name'],
          'email' => $request['email'],
          'country' => $request['country'],
          'phone' => $request['phone'],
          'whatsapp' => $request['whatsapp'],
          'additional' => serialize($additional),
          'image' => $file_name,
      ]);

      return redirect()->back();

    }




}
