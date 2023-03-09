<?php

namespace App\Http\Controllers\elo;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function index() 
    {
        $datas = Mahasiswa::orderBy('id', 'DESC')->paginate(5);
        return view('admin.mahasiswa.index', ['datas' => $datas]);
    }

    public function store(Request $request) 
    {
        // dd($request);
        Mahasiswa::create($request->all());
        return redirect()->route('index.mahasiswa');
    }

    public function edit($id) {
        $data = Mahasiswa::find($id);
        return response()->json(['data' => $data]);
    }

    public function destroy ($id) {
        $data = Mahasiswa::find($id);
        $data->delete();
        return redirect()->route('index.mahasiswa');
    }
}