<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function us()
    {
        return view('web.us');
    }

    public function products()
    {
        return view('web.products');
    }

    public function order()
    {
        return view('web.order');
    }
}
