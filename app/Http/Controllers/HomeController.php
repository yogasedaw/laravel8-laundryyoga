<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnCallback;

class HomeController extends Controller
{
    public function index()
    {
        return view('v_home');
    }
}
