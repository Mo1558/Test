<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //return website page for users
    public function website(){
        return view("website");
    }

    //return dashboard page for admins
    public function dashboard(){
        return view("admin.posts.index");
    }


}
