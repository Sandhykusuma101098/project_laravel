<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SandhyController extends Controller
{
    public function index()
    {
        return view('SANDHY.index');
    }
    public function index_next()
    {
        return view('SANDHY.index_next');
    }
}
