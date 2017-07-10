<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    //
    public function create()
    {
    	//$users = User::all();
    	$users = User::paginate(10);

    	return view('admin.create',compact('users'));
    }
}
