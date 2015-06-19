<?php

namespace Brew\Http\Controllers;

use Illuminate\Http\Request;
use Brew\Http\Requests;
use Brew\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home(Request $request)
    {
        return view('page.home');
    }
}
