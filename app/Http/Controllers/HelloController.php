<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return view("homeku");
    }
    public function callme()
    {
        return view("callme");
    }
    public function aboutme()
    {
        return view("aboutme");
    }
}