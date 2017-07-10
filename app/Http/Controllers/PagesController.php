<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index()
    {
    	return view('pages.data');
    }

    public function profile()
    {
    	return view('pages.profile');
    }
}
