<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        if( !empty( auth() ) ){
            return redirect('/login');
        }else{
            if( (auth()->user()->admin === 0) ){
                return redirect('/home');
            }
        }

    }

    public function index(){
        //return "hello sir ".((1==1)?"true":"false");
        return "hello sir ".((auth()->user()->admin == 0)?"true":"false");
    }
}
