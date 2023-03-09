<?php

namespace App\Http\Controllers\elo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin() 
    {
        return view('admin.dashboard');
    }

}
