<?php

namespace App\Http\Controllers\elo;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function index() {
        $datas = Mahasiswa::paginate(5);
        return view('admin.mahasiswa.index', ['datas' => $datas]);
    }

    public function add() {

        return view('admin.mahasiswa.add');

    }
}
