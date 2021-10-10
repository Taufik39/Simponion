<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('front/index');
    }

    public function admin() {
        return view('back/index');
    }
}
