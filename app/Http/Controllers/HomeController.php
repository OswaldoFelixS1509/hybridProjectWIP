<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function home()
    {
        return view('home');
    }

    public function dashboard()
    {

        return view('dashboard');
    }
}
