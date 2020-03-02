<?php

namespace App\Http\Controllers;

use App\contactForms;
use App\Mail\ContactForms as MailContactForms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WelcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function save(Request $request){
        contactForms::create($request->all());
        $this->send($request);
        return redirect()->route('welcome')->with('status', 'Wysłano formularz');
    }
    public function send($data){
        $data = array(
            'name' => $data->name,
            'lastname' => $data->lastname,
            'email' => $data->email,
            'plan' => $data->plan,
        );
        Mail::to($data['email'])->send(new MailContactForms($data));
        return true;
    }
}
