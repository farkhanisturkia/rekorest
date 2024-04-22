<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekomController extends Controller
{
    public function index() {
        return view('rekom.index');
    }
}
