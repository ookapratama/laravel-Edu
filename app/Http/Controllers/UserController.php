<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){

        $content = 'user/login';
        return view('user.layouts.index', ['content' => $content]);

    }
}
