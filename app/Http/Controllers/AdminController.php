<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin() {

        $content = 'admin/dashboard';

        return view('admin.layouts.index', ['content' => $content ] );
    }

}
