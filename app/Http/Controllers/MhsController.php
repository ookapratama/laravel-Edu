<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contract\MhsContract;
use App\Models\Mahasiswa;


class MhsController extends Controller
{
    
    private $MhsContract;

    public function __construct(MhsContract $MhsContract) {
        $this->MhsContract = $MhsContract;
    }

    public function index() {
        $data = $this->MhsContract->index();
        return $data;
    }

    public function store(Request $request) {
        $this->MhsContract->store($request->all());
        return response()->json([
            'status' => 'berhasil tambah data'
        ]);
    }

    public function edit ($id) {
        $data = $this->MhsContract->edit($id);
        return $data;
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        $tes = $this->MhsContract->update($data, $id);
        return response()->json([
            'data' => $tes,
            'status' => 'Berhasil Ubah data'
        ]);
    }

    public function destroy($id) {

        $this->MhsContract->destroy($id);
        return response()->json([
            'status' => 'Berhasil hapus data'
        ]);

    }




}
