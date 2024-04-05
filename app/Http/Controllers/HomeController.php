<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'PRATIK KUIKEL';
        return view('home', compact('title'));
    }
}
