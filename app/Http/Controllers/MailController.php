<?php

namespace App\Http\Controllers;

use App\Mail\ExampleEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class MailController extends Controller
{
    //

    public function index():View
    {

        return view('index');
    }

    public function maiLMe(){
    // envia el email


        //Mail::to(Auth::user()->email) => enviamos el email del usaurios auntenticado
        /*
         * $user=Mail::to(Auth::user());
         * $user->email
         */
        Mail::to('juancruzliberati2015@gmail.com')->send(new ExampleEmail('juan'));
        return view('sent');


    }
}
