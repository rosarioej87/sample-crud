<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function about()
    {
        return view('test.about');
    }
}
