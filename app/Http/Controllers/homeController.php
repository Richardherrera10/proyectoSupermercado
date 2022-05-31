<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view("welcome.index");
    }

    public function signup(){
        return view("signup");
    }

    public function nosotros(){
        return view("nosotros.index");
    }
    
}
