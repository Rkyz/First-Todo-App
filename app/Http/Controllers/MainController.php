<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }
    public function registerPage(){
        return view('Auth.register');
    }
}
